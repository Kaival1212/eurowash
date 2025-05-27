<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\store>
 */
class StoreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => 'Eurowash',
            'email' => 'eurowashcentre@gmail.com',
            'phone' => '02080793035',
            'address' => '99 Whitton Road',
            'slug' => 'eurowash',
            'city' => 'Twickenham',
            'state' => 'London',
            'pin' => 'TW1 1BZ',
            'logo' => 'https://eurowash.co.uk/wp-content/uploads/2023/01/cropped-Eurowash-Logo-1.png',
            'storeImage' => 'https://eurowash.kaival.co.uk/storage/unnamed.jpg',
            'status' => 'active',
            'mapsUrl' => 'https://maps.app.goo.gl/GfvqPK7rjGgypdJp8',

            // SEO fields
            'seoTitle' => 'Eurowashs | 24/7/365 Launderette in Twickenham | Self-Service & Service Wash',
            'seoDescription' => 'Open 24/7/365, Eurowash in Twickenham offers self-service, service wash, and 24/7 laundry lockers. Visit 99 Whitton Road TW1 1BZ.',
            'seoKeyword' => 'laundry, launderette, 24/7 wash, Twickenham laundry, service wash, self-service',

            // Optional SEO enhancements
            'canonicalUrl' => 'https://eurowash.kaival.co.uk',
            'metaRobots' => 'index, follow',
        ];
    }
}
