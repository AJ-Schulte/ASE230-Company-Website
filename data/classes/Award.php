<?php
class Award {
    private static string $csvFile = __DIR__ . '/../awards.csv';

    public string $year;
    public string $award;

    public function __construct(string $year, string $award) {
        $this->year = $year;
        $this->award = $award;
    }

    /** Load all awards */
    public static function all(): array {
        $awards = [];
        if (!file_exists(self::$csvFile)) return $awards;

        if (($handle = fopen(self::$csvFile, "r")) !== FALSE) {
            $headers = fgetcsv($handle);
            while (($data = fgetcsv($handle)) !== FALSE) {
                $row = array_combine($headers, $data);
                $awards[] = new Award($row['Year'], $row['Award']);
            }
            fclose($handle);
        }
        return $awards;
    }

    /** Find award by its index (row number) */
    public static function find(int $id): ?Award {
        $all = self::all();
        return $all[$id] ?? null;
    }

    /** Save all awards back to CSV */
    private static function saveAll(array $awards): void {
        $handle = fopen(self::$csvFile, "w");
        fputcsv($handle, ['Year', 'Award']);
        foreach ($awards as $a) {
            fputcsv($handle, [$a->year, $a->award]);
        }
        fclose($handle);
    }

    /** Create a new award */
    public function create(): void {
        $awards = self::all();
        $awards[] = $this;
        self::saveAll($awards);
    }

    /** Update an existing award (by ID) */
    public static function update(int $id, string $year, string $award): void {
        $awards = self::all();
        if (!isset($awards[$id])) return;
        $awards[$id]->year = $year;
        $awards[$id]->award = $award;
        self::saveAll($awards);
    }

    /** Delete an award by ID */
    public static function delete(int $id): void {
        $awards = self::all();
        if (!isset($awards[$id])) return;
        array_splice($awards, $id, 1);
        self::saveAll($awards);
    }
}
