<?php

require_once "db.php";
class Story
{

    public $id;
    public $headline;
    public $category_id;
    public $author;
    public $publish_date;

    public $image_url;

    public $short_headline;
    public $summary;
    public $article;
    public $publish_time;

    public $read_time;

    public function __construct($props = null)
    {
        if ($props != null) {
            $this->id = $props["id"];
            $this->headline = $props["headline"];
            $this->category_id    = $props["category_id"];
            $this->author = $props["author"];
            $this->publish_date = $props["publish_date"];
            $this->image_url = $props["image_url"];
            $this->short_headline = $props["short_headline"];
            $this->summary = $props["summary"];
            $this->article = $props["article"];
            $this->publish_time = $props["publish_time"];
            $this->read_time = $props["read_time"];
        }
    }


    public function save()
    {
        // not yet written
    }

    public function delete()
    {
        // not yet written

    }

    public static function findAll()
    {
        $stories = array();

        try {
            $db = new DB();
            $conn = $db->open();
            //  $conn = $db->getConnection();

            $sql = "SELECT * FROM website.stories";
            $stmt = $conn->prepare($sql);
            $status = $stmt->execute();

            if (!$status) {
                $error_info = $stmt->errorInfo();
                $message = "SQLSTATE error code = " . $error_info[0] . "; error message = " . $error_info[2];
                throw new Exception("Database error executing database query: " . $message);
            }

            if ($stmt->rowCount() !== 0) {
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
                while ($row !== FALSE) {
                    $story = new Story($row);
                    $stories[] = $story;

                    $row = $stmt->fetch(PDO::FETCH_ASSOC);
                }
            }
        } finally {
            if ($db !== null && $db->isOpen()) {
                $db->close();
            }
        }

        return $stories;
    }
    public static function findNum($number, $offset = 0)
    {
        $stories = array();

        try {
            $db = new DB();
            $conn =  $db->open();
            //$conn = $db->getConnection();

            $sql = "SELECT * FROM stories " . "LIMIT " . $number . " OFFSET " . $offset;
            $params = [
                ":limit" => $number,
                ":offset" => $offset
            ];
            $stmt = $conn->prepare($sql);
            $status = $stmt->execute();

            if (!$status) {
                $error_info = $stmt->errorInfo();
                $message = "SQLSTATE error code = " . $error_info[0] . "; error message = " . $error_info[2];
                throw new Exception("Database error executing database query: " . $message);
            }

            if ($stmt->rowCount() !== 0) {
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
                while ($row !== FALSE) {
                    $story = new Story($row);
                    $stories[] = $story;

                    $row = $stmt->fetch(PDO::FETCH_ASSOC);
                }
            }
        } finally {
            if ($db !== null && $db->isOpen()) {
                $db->close();
            }
        }

        return $stories;
    }
    public static function findLatest($publish_date, $limit)
    {
        $stories = array();

        try {
            $db = new DB();
            $conn = $db->open();
            //$conn = $db->getConnection();

            $sql = "SELECT * FROM website.stories " . "ORDER BY " . $publish_date . " LIMIT " . $limit;
            $params = [
                ":limit" => $limit,
                ":order by" => $publish_date
            ];
            $stmt = $conn->prepare($sql);
            $status = $stmt->execute();

            if (!$status) {
                $error_info = $stmt->errorInfo();
                $message = "SQLSTATE error code = " . $error_info[0] . "; error message = " . $error_info[2];
                throw new Exception("Database error executing database query: " . $message);
            }

            if ($stmt->rowCount() !== 0) {
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
                while ($row !== FALSE) {
                    $story = new Story($row);
                    $stories[] = $story;

                    $row = $stmt->fetch(PDO::FETCH_ASSOC);
                }
            }
        } finally {
            if ($db !== null && $db->isOpen()) {
                $db->close();
            }
        }

        return $stories;
    }
    // 
    public static function findById($id)
    {
        $story = null;
        try {
            $db = new DB();
            $conn = $db->open();
            $sql = "SELECT * FROM website.stories WHERE id = :id";

            $stmt = $conn->prepare($sql);
            $stmt->bindValue(':id', $id, PDO::PARAM_INT);
            $status = $stmt->execute();

            if (!$status) {
                $error_info = $stmt->errorInfo();
                $message =
                    "SQLSTATE error code = " . $error_info[0] .
                    "; error message = " . $error_info[2];
                throw new Exception($message);
            }


            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($row !== FALSE) {
                $story = new Story($row);
            }
        } finally {
            if ($db != null && $db->isOpen()) {
                $db->close();
            }
        }
        return $story;
    }
}
