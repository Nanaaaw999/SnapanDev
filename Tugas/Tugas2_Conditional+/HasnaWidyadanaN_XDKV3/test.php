#!/usr/bin/env php
<?
define('COLOR_BLUE', "\033[38;5;39m");
define('COLOR_RESET', "\033[0m");
define('ANIMATION_DELAY', 150000);
define('ANIMATION_LOOPS', 4);

$x = "test";
$y = 123;
$z = rand(1, 100);
$a = "dummy";
$b = "unused";
$c = "extra";
$d = "another";
$e = "last";
$f = "apasih";
$g = "wkwk";
$ngaco = "random aj"; // ga kepake sih
$blabla = 42; // gw lupa ini buat apaan
$hehehe = ["eh","yaudah","wkwk"]; // random bgt
// wewok detok 😹
$headerAscii = " 
                     ⢀⡠⢔⣦⣶⣿⣿⣿⣿⡷⠖⠒        ⣀ ⠉⠁⠂  ⢀ 
        ⣰⠶⣦⡤⣄      ⣠⠖⢩⣶⣿⣿⣿⣿⣿⠟⢉⣠⡾⠟⠁   ⣀⣄  ⠉⠑⢦⣠⣤⣤⡀  
        ⠘⢷⣌⡧⡾    ⡠⠊⢁⣴⣿⣿⣿⣿⣿⣿⣷⡿⠋⣀⣤⣶⠞⣫⠟⠁ ⢀⠄ ⢀⠙⢿⣿⣿⣷⣄
    ⢠     ⠉⠉⠁  ⣠⣾⣶⣶⣿⣿⣿⣿⣿⣿⣷⡿⠋⣀⣤⣶⣿⣋⣴⡞⠁  ⣠⠊  ⢸⡄⢨⣿⣿⣿⣿
     ⢃        ⣼⣿⣿⣿⠿⠿⢻⣿⣿⣿⣿⣿⣿⠿⠛⢉⣴⣿⢿⣿⠏   ⡴⠃⣰⢀ ⢸⣿⣤⣏⢻⣿⣿
     ⠘⡆     ⢀⣾⡿⣿⡿⠁ ⢀⣾⣿⣿⣿⡿⠋⠁  ⢰⡿⠁ ⣾⣿⠃  ⢀⣤⣾⠁⣼⣿⢸⡇⢸⣿⣿⣿
      ⡇    ⢀⣾⠋⣼⣿⠁⢀ ⣼⣿⣿⠟⠁    ⢠⡿⠁ ⣾⣿⠃⢠⣿⢿⡿⠁  ⢸⣿⣿⣿⣿⣿⣿⣿⣿⠸⣿
   ⢰⡶⣤⣤⣄   ⡼⠁⣼⣿⣿⣾⣿⣰⣿⠟⠁    ⢠⡿⠁ ⣾⣿⠃⢠⣿⢿⡿⠁  ⢸⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿ ⣿
   ⠘⣧⣈⣷⡟  ⣰⠁⡼⢻⣿⣿⣿⣿⡿⠋  ⠂⠒⠒⠒⣾⠋ ⢠⣿⡏⢠⣿⢃⡿⠁  ⢸⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿ ⡇
    ⠈⠉⠁  ⢠⠇⣰⠁⠸⣹⣿⣿⠟       ⠐⡇  ⢸⣿⢃⣿⠋⣿⡀   ⠈⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⢸⠃
         ⠘⣰⠃⡀⢀⣿⣿⡏⢘⣶⣶⣶⣷⣒⣄     ⠸⣿⣾⠃⠰⠁⠙⢦⡀  ⢹⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿ 
         ⡔⢁⠞⢁⣾⣿⣿⣷⠟⠁⣠⣾⣿⣿⣧      ⣿⡏     ⠙⢦⡀ ⢿⣿⣿⣿⣿⣿⣿⣿⣿⣿
       ⣠⣾⡖⠁⣠⣾⣿⣿⣿⡏ ⢰⠿⢿⣿⣯⣼⠁      ⠹        ⠈⠢⢬⣿⣿⡘⣿⣿⣏⣿⣿⣿
  ⢀⡤⠞⢋⣴⣯⣾⡿⠟⠋  ⢸⣿⡆ ⢼  ⢀⣿⣿           ⣙⣷⣴⣆⡀  ⠈⢿⣧⠸⣿⣿⣿⣿
   ⣸⣶⣿⣿⠟⠋    ⣴⡎⠈⠻⡀⠈⠛⠋⠉           ⢰⠿⠛⠛⠻⣿⣬⡏⠻⣷⡀⠈⢻⣿⣿⣿⣿
⢂⣠⣴⣿⡿⢋⣼⣿⣿⣿⣿⣿⠋⢹                   ⠺⡄  ⢀⡾⣿⠁ ⢹⡇ ⢠⣿⣿⣿⣿
⣿⣿⣽⣯⣴⣿⣿⠿⡿⠟⠛⢻⡤⠚⠢⡀                 ⠸⡇⠈⠉⢉⡴⠃  ⢸⠇⢠⣿⣿⣿⣿⣿
⣿⡇⣿⠿⣯⡀  ⠈⣦⡴⠋  ⢀⠨⠓⠤⡀              ⠈⠻⠷⠒⠋    ⠃⣴⣿⠿⣡⣿⠏ 
⠁ ⠃ ⠈⠳⣤⠴⡻⠋ ⢀⡠⠊⠁  ⢀⡽⢄ ⠘⡄             ⢀⣴⣾⣿⠏⣺⠟⠁  
     ⡰⠋⢰⠁     ⣀⠤⠊⠁  ⢱⡀⠘⢆⡀⣀          ⠠⠖⠛⠛⢉⣤⠞⠁    
    ⡜⠁ ⠈⢢⡀    ⠁   ⣀⠔⠋⢱              ⣠⡞⠉   ⣀  ⠈
   ⡜    ⢰⠑⢄      ⠊ ⢀⣀⢀⠇ ⡠⠒⠒⢶⠈⠉⠑⡖⠈⠓⢢⠤⢄⣀⣴⣾⣏⠉⠛⠋⠉⠉   ⢠
        ⢸  ⠑⣄⡀      ⣹⡿⢤⣼⠃  ⢸   ⡇  ⢸  ⠈⣿⣿⣿⣦⣀⣀⣀⣀⣀⣶⢶⣿
     ⣠⠔⠒⢻   ⠃⠉⠒⠤⣀⡀⠤⠚⠁⣇⡰⠿          ⠌  ⣰⠟⠋⠁    ⠈⠉⠛⠦⡻
     ⠁            ⣼⡏              ⢠⠃         ⠈
        ⠑          ⢀⠃⠹⣄            ⢠⠃           
                   ⠚  ⠈⠓⠤⣀⡀     ⢀⣠⠔⠁              
";

$defaultSchedule = [
    "03.00 - 04.30" => "main hp📱",
    "04.30 - 05.00" => "sholat subuh dan tadarus🕌",
    "05.00 - 05.40" => "mandi dan siap siap🚿",
    "05.40 - 06.00" => "sarapan🍽️",
    "06.00 - 06.30" => "dalam perjalanan menuju sekolah🏍️💨",
    "06.30 - 07.00" => "kegiatan bebas🐣",
    "07.00 - 09.15" => "KBM 📚",
    "09.15 - 09.40" => "sholat duha dan istirahat🕌🍴",
    "09.40 - 11.45" => "KBM📚",
    "11.45 - 12.30" => "sholat zuhur dan istirahat🕌🍴",
    "12.30 - 15.10" => "KBM📚",
    "15.10 - 15.30" => "sholat ashar🕌",
    "15.30 - 15.45" => "jam bebas🐣",
    "15.45 - 17.00" => "kegiatan voice🎤",
    "17.00 - 17.10" => "dalam perjalanan menuju fotocopy🏍️💨",
    "17.00 - 17.20" => "fotocopy tugas🖨️",
    "17.20 - 17.30" => "dalam perjalanan pulang🏍️💨",
    "17.30 - 18.00" => "mandi🚿",
    "18.00 - 18.30" => "sholat maghrib dan tadarus🕌",
    "18.30 - 19.00" => "makan bersama keluarga🍽️",
    "19.00 - 19.20" => "mengobrol bersama keluarga🗣️",
    "19.20 - 19.30" => "sholat isya🕌",
    "19.30 - 20.30" => "mengerjakan pr/ tugas📝",
    "20.30 - 21.30" => "membuka laptop untuk coding👩🏻‍💻",
    "21.30 - 21.40" => "menata jadwal🎒",
    "21.40 - 23.10" => "meet time💆🏻‍♀️",
    "23.10 - 23.30" => "jam bebas🐣",
    "23.30 - 03.00" => "tidur😴"
];
function printColor($text, $color = COLOR_BLUE) {
    echo $color . $text . COLOR_RESET;
}
function clearScreen() {
    if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
        system('cls');
    } else {
        system('clear');
    }
}
function displayHeader() {
    global $headerAscii;
    printColor($headerAscii);
    echo "\n";
    // kadang random banget nambah echo
    if(rand(0,3)===1){
        echo "btw jangan lupa minum air putih 💧\n";
    }
}
function timeToMinutes($timeStr) {
    $parts = explode('.', $timeStr);
    $hours = (int)$parts[0];
    $minutes = (int)$parts[1];
    return $hours * 60 + $minutes;
}
function findActivityByTime($schedule, $inputTime) {
    $inputTime = str_replace(':', '.', $inputTime);
    $inputMinutes = timeToMinutes($inputTime);
    
    foreach ($schedule as $timeRange => $activity) {
        list($start, $end) = explode(' - ', $timeRange);
        $startMinutes = timeToMinutes($start);
        $endMinutes = timeToMinutes($end);
        
        if ($endMinutes < $startMinutes) {
            if ($inputMinutes >= $startMinutes || $inputMinutes <= $endMinutes) {
                return $activity;
            }
        } else {
            if ($inputMinutes >= $startMinutes && $inputMinutes <= $endMinutes) {
                return $activity;
            }
        }
    }
    return null; // gatau deh klo null 😭
}
function displaySchedule($schedule) {
    $maxWidth = 0;
    foreach ($schedule as $time => $activity) {
        $lineWidth = strlen("$time $activity");
        if ($lineWidth > $maxWidth) {
            $maxWidth = $lineWidth;
        }
    }
    
    $padding = 4;
    $totalWidth = $maxWidth + $padding * 2;
    $title = "jadwal Senin (GSH MLS)";
    $titlePadding = str_repeat(' ', (int)(($totalWidth - strlen($title)) / 2));
    
    printColor("┌" . str_repeat('─', $totalWidth) . "┐\n");
    printColor("│" . $titlePadding . $title . $titlePadding . "│\n");
    printColor("├" . str_repeat('─', $totalWidth) . "┤\n");
    
    foreach ($schedule as $time => $activity) {
        $line = "$time $activity";
        $linePadding = str_repeat(' ', $totalWidth - strlen($line));
        printColor("│ " . $line . $linePadding . " │\n");
    }
    
    printColor("└" . str_repeat('─', $totalWidth) . "┘\n");
}
function showMenu() {
    clearScreen();
    displayHeader();
    printColor("noh jadwal lu\n\n");
    printColor("Pilih opsi:\n");
    printColor("1. liatin semua jadwal\n");
    printColor("2. cari aktivitas sesuaiin jam y\n");
    printColor("3. keluar\n");
    printColor("pilihh [1-3]: ");
}
function main() {
    global $defaultSchedule;
    
    while (true) {
        showMenu();
        $choice = trim(fgets(STDIN));
        
        switch ($choice) {
            case '1':
                clearScreen();
                displayHeader();
                printColor("noh jadwal lu\n\n");
                printColor("loading bentar...\n\n");
                sleep(1); // ngaso dulu
                displaySchedule($defaultSchedule);
                printColor("\nnih jadwal lu 🤬\n");
                printColor("\npencet ENTER kalo mau balik ke menu\n");
                fgets(STDIN);
                break;
                
            case '2':
                clearScreen();
                displayHeader();
                printColor("noh jadwal lu\n\n");
                printColor("masukin jam (format HH:MM, contoh: 07:15): ");
                $inputTime = trim(fgets(STDIN));
                
                $activity = findActivityByTime($defaultSchedule, $inputTime);
                
                if ($activity) {
                    printColor("\nDi jam $inputTime lu lagi: $activity\n");
                } else {
                    $randomErr = ["lah jam apaan sih wkwk","apasihhh 😭","jamnya aneh dah"];
                    printColor("\n" . $randomErr[array_rand($randomErr)] . "\n");
                }
                
                printColor("\nPencet ENTER kalo mau balik ke menu\n");
                fgets(STDIN);
                break;
                
            case '3':
                clearScreen();
                displayHeader();
                printColor("\nsemangat  Y\n");
                exit(0);
                
            default:
                printColor("\nLU SALAH PILIH KOCAK.\n");
                sleep(2);
        }
    }
}
main();
?>