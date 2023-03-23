<?php

namespace Behavioral\Command;

use LengthException;

final class CreateListing implements Command
{
    private const MIN_TITLE_LENGTH = 10;

    private const MIN_CONTENT_LENGTH = 15;

    private const MIN_AUTHOR_LENGTH = 5;

    /**
     * @var ListingRepository
     */
    private ListingRepository $repository;

    /**
     * @var string
     */
    private string $title;

    /**
     * @var string
     */
    private string $content;

    /**
     * @var string
     */
    private string $author;

    /**
     * @param ListingRepository $repository
     * @param string $title
     * @param string $content
     * @param string $author
     */
    public function __construct(ListingRepository $repository, string $title, string $content, string $author)
    {
        $this->repository = $repository;
        $this->title = $title;
        $this->content = $content;
        $this->author = $author;
    }

    /**
     * @return void
     */
    private function validate(): void
    {
        if (strlen($this->title) < self::MIN_TITLE_LENGTH) {
            throw new LengthException(sprintf("Title is too short. Must be at least %d characters",
                self::MIN_TITLE_LENGTH));
        }
        if (strlen($this->content) < self::MIN_CONTENT_LENGTH) {
            throw new LengthException(sprintf("Content is too short. Must be at least %d characters",
                self::MIN_CONTENT_LENGTH));
        }
        if (strlen($this->author) < self::MIN_AUTHOR_LENGTH) {
            throw new LengthException(sprintf("Author name is too short. Must be at least %d characters",
                self::MIN_AUTHOR_LENGTH));
        }
    }

    /**
     * @return void
     */
    public function handle(): void
    {
        $this->validate();
        $this->repository->create($this->title, $this->content, $this->author);
    }
}