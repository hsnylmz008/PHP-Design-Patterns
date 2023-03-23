<?php

namespace Behavioral\Command;
final class Client
{
    /**
     * @var ListingRepository
     */
    private ListingRepository $listingRepository;

    /**
     * @param ListingRepository $repository
     */
    public function __construct(ListingRepository $repository)
    {
        $this->listingRepository = $repository;
    }

    /**
     * @param string $title
     * @param string $content
     * @param string $author
     * @return void
     */
    public function createListing(string $title, string $content, string $author): void
    {
        $command = new CreateListing($this->listingRepository, $title, $content, $author);
        $command->handle();
    }

    /**
     * @param string $listingUid
     * @return void
     */
    public function deleteListing(string $listingUid) : void
    {
        $command = new DeleteListing($this->listingRepository, $listingUid);
        $command->handle();
    }

}