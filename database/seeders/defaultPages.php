<?php

namespace Database\Seeders;

use App\Models\page;
use Illuminate\Database\Seeder;

class defaultPages extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Page::factory()->create([
            "title" => "Startseite",
            "content" => '<h1><span style="color: #000000;">Startseite</span></h1>
                <p><span style="color: #000000;">Willkommen auf der Startseite.&nbsp;</span></p>
                <p><span style="color: #000000;"><strong>Hier k&ouml;nnte ganz viel Text stehen.&nbsp;</strong></span></p>
                <p><span style="color: #000000;"><em>Leider bin ich gerade sehr unkreativ.&nbsp;</em></span></p>
                <p><span style="color: #e03e2d;">Deshalb sind hier nur so ein paar S&auml;tze.&nbsp;</span></p>
                <p><span style="text-decoration: line-through;"><span style="color: #3598db; text-decoration: line-through;">Schade.</span></span></p>
                <p style="text-align: center;"><span style="text-decoration: underline;"><span style="color: #f1c40f; text-decoration: underline;">Naja.</span></span></p>
                <ul>
                <li style="text-align: left;"><span style="color: #000000;">Daf&uuml;r gibt es noch eine Aufz&auml;hlung </span></li>
                <li style="text-align: left;"><span style="color: #000000; background-color: #eccafa;">Damit sollten die wichtigsten Funktionen getestet sein&nbsp;</span></li>
                </ul>
                <p>&nbsp;</p>
                <p>&nbsp;</p>',
            "url" => "startseite",
            "user_id" => 1
        ]);

        Page::factory()->create([
            "title" => "Polls",
            "content" => "<polls></polls>",
            "url" => "polls",
            "user_id" => 1
        ]);

        Page::factory()->create([
            "title" => "Test",
            "content" => "ganz viel text",
            "url" => "test",
            "user_id" => 1
        ]);
    }
}
