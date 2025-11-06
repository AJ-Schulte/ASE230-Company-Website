<?php
class JSONHelper {
    public static function read($filePath) {
        if (!file_exists($filePath)) return [];
        $json = file_get_contents($filePath);
        return json_decode($json, true);
    }

    public static function write($filePath, $data) {
        $json = json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
        file_put_contents($filePath, $json);
    }

    public static function add($filePath, $id, $item) {
        $data = self::read($filePath);
        $data[$id] = $item;
        self::write($filePath, $data);
    }

    public static function delete($filePath, $id) {
        $data = self::read($filePath);
        unset($data[$id]);
        self::write($filePath, $data);
    }

    public static function get($filePath, $id) {
        $data = self::read($filePath);
        return $data[$id] ?? null;
    }
}
?>
