<?php

namespace App\Jobs;

use App\Board;
use App\Mail\NewBoardCreatedMail;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Mail;

class ProcessNewBoard implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $board;
    /**
     * Create a new job instance.
     *
     * @return void
     */
   
    public function __construct(Board $board)
    {
        $this->board = $board;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        // $board = \App\Board::findOrFail($this->board);
	    Mail::to('mail@mghako.com')->send(new NewBoardCreatedMail($this->board));
        logger('board create - '.  $this->board->title);
    }
}
