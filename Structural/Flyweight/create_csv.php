<?php
class CSV {

    const COLUMNS = ["id", "uuid", "location", "resolution", "producer", "operating_system", "ip"];
    const LOCATIONS = ["Warsaw", "Berlin", "Amsterdam", "Paris"];
    const RESOLUTIONS = ["Full HD", "4K"];
    const PRODUCERS = ["LG", "Samsung", "Philips", "Sencor"];
    const OPERATING_SYSTEMS = ["Linux", "Android", "Ubuntu"];

    /**
     * @var int
     */
    private int $numItems;

    /**
     * @var string
     */
    private string $fileName;

    private $file;

    /**
     * @param string $fileName
     * @param int $numItems
     */
    public function __construct (string $fileName, int $numItems) {
        $this->numItems = $numItems;
        $this->fileName = $fileName;
    }

    /**
     * @return void
     */
    protected function createHeader (): void {
        fputcsv($this->file, self::COLUMNS);
    }

    /**
     * @param int $length
     * @return string
     */
    protected function generateRandomString (int $length): string {
        return substr(str_shuffle(str_repeat($x = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length / strlen($x)))), 1, $length);
    }

    /**
     * @param array $arr
     * @return string
     */
    protected function getRand (array $arr): string {
        $key = array_rand($arr);

        return $arr[$key];
    }

    /**
     * @return string
     */
    protected function getRandIp (): string
    {
        return mt_rand(0, 255) . "." . mt_rand(0, 255) . "." . mt_rand(0, 255) . "." . mt_rand(0, 255);
    }

    /**
     * @return void
     */
    protected function generateData (): void {
        for ($idx = 0; $idx < $this->numItems; $idx++) {
            fputcsv($this->file, [
                $idx + 1,
                $this->generateRandomString(rand(5, 10)),
                $this->getRand(self::LOCATIONS),
                $this->getRand(self::RESOLUTIONS),
                $this->getRand(self::PRODUCERS),
                $this->getRand(self::OPERATING_SYSTEMS),
                $this->getRandIp()
            ]);
        }
    }

    /**
     * @return void
     */
    public function create (): void {
        $this->file = fopen($this->fileName, 'w');
        $this->createHeader();
        $this->generateData();
        fclose($this->file);
    }
}

$csv = new CSV("demo.csv", 5000);
$csv->create();