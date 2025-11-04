<?php
class Page {
    private static string $pagesDir = __DIR__ . '/../pages';

    public string $title;
    public string $content;

    public function __construct(string $title, string $content = '') {
        $this->title = $title;
        $this->content = $content;
    }

    private static function sanitizeTitle(string $title): string {
        return preg_replace('/[^a-zA-Z0-9_\-]/', '_', $title);
    }

    private static function filePath(string $title): string {
        return self::$pagesDir . '/' . self::sanitizeTitle($title) . '.txt';
    }

    public static function all(): array {
        $files = glob(self::$pagesDir . '/*.txt');
        $pages = [];

        foreach ($files as $file) {
            $title = basename($file, '.txt');
            $content = file_get_contents($file);
            $pages[] = new Page($title, $content);
        }

        return $pages;
    }

    public static function find(string $title): ?Page {
        $file = self::filePath($title);
        if (!file_exists($file)) return null;
        return new Page($title, file_get_contents($file));
    }

    public function save(): void {
        $file = self::filePath($this->title);
        file_put_contents($file, $this->content);
    }

    public static function delete(string $title): void {
        $file = self::filePath($title);
        if (file_exists($file)) unlink($file);
    }

    public function lastModified(): ?string {
        $file = self::filePath($this->title);
        return file_exists($file) ? date("Y-m-d H:i:s", filemtime($file)) : null;
    }
}
