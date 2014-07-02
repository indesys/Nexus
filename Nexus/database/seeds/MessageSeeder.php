<?php

class MessageSeeder extends Seeder {

    public function run()
    {
        $messages = [
['introduction' => 'Over the years, IFS has been the mainstay system for those wanting to manage a fleet of role-playing games.  IFS was tailored to Star Trek simulations, though some have managed to adapt it to other scenarios.  However, IFS was and is far from perfect, with it being a cobbled together platform itself utilising a few management tools, and a lot of things have become old, outdated, or simply broken, either from flaws in the design, or with people attempting to tinker with the underlying architecture.

With the success of the SMS and then Nova platforms, I have decided to rework the IFS system utilising a single framework.  To begin with, this will one again be tailored to Star Trek simulations, but following in the footsteps of Anodyne Productions, this product will hopefully continue to be adapted, and grow into something more than the sum of its parts.',

'message' => 'Nexus Fleet is located on the outer most edge and past Federation space between the Romulan Star Empire and the Tercera Expanse close to Breen territory.  While this puts it in the relative vicinity of both Obsidian and Horizon Fleets, and some areas of operation overlap, the fleet has a separate charter to go forth, explore and search for the possibility to expand.', 

'history' => 'Founded in 2380 a few years after the Romulan Reman affair which almost cost the Federation of its flagship, <em>Enterprise</em>, the formation of the fleet along the outer most edges of Federation space toward the galactic core put it in the prime position to get back to the Federation\'s root charter, to go forth, explore, and go where no one has gone before.', 

'cp_message' => 'Define your control panel message in the control panel.', 

'join_disclaimer' => 'Define your join disclaimer in the control panel.', 

'rules' => 'Define your fleet rules in the control panel.', 

'faqs' => 'Define your frequently asked questions in the control panel.', 

'accept_message' => 'Define your accept message in the control panel.', 

'reject_message' => 'Define your reject message in the control panel.', 

'credits_perm' => 'This Fleet Management System, code-named "Nexus", has been built on the <a href="http://www.laravel.com/" target="_blank">Laravel PHP framework</a> created by Taylor Otwell.

Rank images used throughout the system were created by <a href="http://www.kuro-rpg.net/" target="_blank">Kuro-RPG</a> and are available for download from his site.  Please do not copy or reproduce these images from this site.', 

'credits' => 'Define your credits in the control panel.'],
        ];

        foreach ($messages as $message)
        {
            MessageModel::create($message);
        }
    }

}
