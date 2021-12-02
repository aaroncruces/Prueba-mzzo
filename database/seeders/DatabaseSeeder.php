<?php

namespace Database\Seeders;

use App\Models\Ability;
use App\Models\Pokemon;
use Illuminate\Database\Seeder;
use GuzzleHttp\Client;
use Symfony\Component\Console\Output\ConsoleOutput;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$testCategory=new Ability();
        //$testCategory->name="abilidad de prueba";
        // $testCategory->id=12;
        // $testCategory->save();

        //defining tools
        $out = new ConsoleOutput();

        
        $client = new Client();
        $api_url_pokemon='https://pokeapi.co/api/v2/pokemon/';

        for ($i=1; $i <=100 ; $i++) { 
            // get pokemon from api
            $api_response_pokemon = $client->get($api_url_pokemon.$i);
            $pokemon_i_from_api=json_decode($api_response_pokemon->getBody());

            //notify
            $out->writeln("$i - saving pokemon: $pokemon_i_from_api->name");

            //save pokemon
            $pokemon_i_to_db=Pokemon::firstOrNew(
                ['id' => $pokemon_i_from_api->id]
            );
            $pokemon_i_to_db->name=$pokemon_i_from_api->name;
            $pokemon_i_to_db->sprite_front_default=$pokemon_i_from_api->sprites->front_default;
            $pokemon_i_to_db->height=$pokemon_i_from_api->height;
            $pokemon_i_to_db->weight=$pokemon_i_from_api->weight;
            $pokemon_i_to_db->base_experience=$pokemon_i_from_api->base_experience;
            $pokemon_i_to_db->save();

            //saving abilities
            $abilities_of_current_pokemon=[];
            foreach ($pokemon_i_from_api->abilities as $ability_item) {
                // get ability from api
                $url_api_ability=$ability_item->ability->url;
                $api_response_ability = $client->get($url_api_ability);
                $ability_from_api=json_decode($api_response_ability->getBody());

                $out->writeln("  $pokemon_i_from_api->name has $ability_from_api->name");
                //save ability
                $ability_to_db=Ability::firstOrNew(
                    ['id' => $ability_from_api->id]
                );
                $ability_to_db->id=$ability_from_api->id;
                $ability_to_db->name=$ability_from_api->name;
                $ability_to_db->save();

                array_push($abilities_of_current_pokemon,$ability_from_api->id);
            }
            //sava many to many relationship
            $pokemon_i_to_db->abilities()->sync($abilities_of_current_pokemon); 
        }

        
           // ;
    }
}