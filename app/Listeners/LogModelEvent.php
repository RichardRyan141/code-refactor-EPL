<?php

namespace App\Listeners;

use App\Events\ModelEvent;
use DB;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class LogModelEvent
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(ModelEvent $event): void
    {
        $action = $event->model->isDirty() ? 'updated' : ($event->model->exists ? 'created' : 'deleted');

        $oldValues = $event->model->getOriginal()->name;
        $oldValuesString = implode(', ', $oldValues);
        $newValues = $event->model->getAttributes()->name;
        $newValuesString = implode(', ', $newValues);

        $message = "{$action}: old values = {$oldValuesString}, new values = {$newValuesString}";

        DB::insert('insert into logs (level, message) values (?, ?)', [$action, $message]);
    }
}
