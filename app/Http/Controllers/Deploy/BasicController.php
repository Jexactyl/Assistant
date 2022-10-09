<?php

namespace App\Http\Controllers\Deploy;

use Exception;
use Illuminate\View\View;
use App\Services\CommandService;
use App\Http\Controllers\Controller;
use App\Http\Requests\Deploy\BasicRequest;

class BasicController extends Controller
{
    private CommandService $commandService;

    /**
     * BasicController constructor.
     */
    public function __construct(CommandService $commandService)
    {
        $this->commandService = $commandService;
    }

    /**
     * Display the basic deploy settings view.
     */
    public function index(): View
    {
        return view('deploy.basic');
    }

    /**
     * Update the basic Panel settings.
     */
    public function update(BasicRequest $request)
    {
        $response = $this->commandService
            ->handle("sed -i \"s/APP_URL=http://panel.example.com/APP_URL=" . $request->input('url') . "/\" /var/www/jexactyl/.env");

        if (!$response) {
            throw new Exception('Unable to process command');
        } else {
            return dd($request->input('url'), $response);
        };
    }
}