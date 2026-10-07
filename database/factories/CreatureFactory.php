<?php

namespace Database\Factories;

use App\Models\Creature;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Creature-mfs>
 */
class CreatureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom' => fake()->unique()->randomElement(['Pwie', 'Cattiva', 'Caprity', 'Flambelle', 'Fuack', 'Furax', 'Gargouille', 'Gorille', 'Griffon', 'Hippogriffe', 'Hydre', 'Kraken', 'Léviathan', 'Minotaure', 'Manticore', 'Ogre', 'Orque', 'Phénix', 'Sphinx', 'Troll']),
            'type' => fake()->randomElement(Creature::TYPES),
            'points_de_vie' => fake()->numberBetween(20, 300),
            'attaque' => fake()->numberBetween(5, 120),
            'description' => fake()->randomElement([
                'Une créature féroce et redoutable.',
                'Une créature mystérieuse et insaisissable.',
                'Une créature agile et rapide.',
                'Une créature puissante et imposante.',
                'Une créature rusée et intelligente.'
            ]),
        ];
    }
}
