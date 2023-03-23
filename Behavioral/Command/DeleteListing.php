<?php

namespace Behavioral\Command;

final class DeleteListing implements Command
{
    /**
     * @var ListingRepository
     */
    private ListingRepository $repository;

    /**
     * @var string
     */
    private string $listingUid;

    /**
     * @param ListingRepository $repository
     * @param string $listingUid
     */
    public function __construct(ListingRepository $repository, string $listingUid)
    {
        $this->repository = $repository;
        $this->listingUid = $listingUid;
    }

    /**
     * @return void
     */
    public function handle(): void
    {
        $this->repository->delete($this->listingUid);
    }
}