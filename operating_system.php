<h3>Operating System</h3>

<?php

class OperatingSystem 
{
    public function getDiskSpace()
    {
        $disk_path = PHP_OS_FAMILY === "Windows" ? "C:" : "/";

        $total_space = disk_total_space($disk_path);
        $free_space = disk_free_space($disk_path);
        $used_space = $total_space - $free_space;


        $total_space = round($total_space / 1024 / 1024 / 1024,2);
        $free_space = round($free_space / 1024 / 1024 / 1024,2);
        $used_space = round($used_space / 1024 / 1024 / 1024,2);

        return [
            "total_space" => $total_space . "GB",
            "free_space" => $free_space . "GB", 
            "used_space" => $used_space . "GB"
        ];

    }
}

$operating_system = new OperatingSystem();
$disk_info = $operating_system->getDiskSpace();
echo "Total Space: " . $operating_system->getDiskSpace()["total_space"] . "<br>";
echo "Free Space: " . $operating_system->getDiskSpace()["free_space"] . "<br>";
echo "Used Space: " . $operating_system->getDiskSpace()["used_space"] . "<br>";

?>