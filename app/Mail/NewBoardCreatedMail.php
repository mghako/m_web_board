<?php

namespace App\Mail;

use App\Board;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewBoardCreatedMail extends Mailable
{
    use Queueable, SerializesModels;
    protected $board;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Board $board)
    {
        $this->board = $board;
        $boardTitle = $this->board->title;
        $boardShortDescription = $this->board->short_description;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.boards.newboardcreatedmail')->with('board', $this->board);
    }
}
