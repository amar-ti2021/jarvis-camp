<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TableController extends Controller
{
    public function table()
    {
        $data = [
            "title" => "Table",
            "data" => [
                [
                    "task" => "Update Software",
                    "progress" => 55
                ],
                [
                    "task" => "Clean Database",
                    "progress" => 70
                ],
                [
                    "task" => "Cron job running",
                    "progress" => 30
                ],
                [
                    "task" => "Fix and squish bugs",
                    "progress" => 90
                ]
            ]
        ];
        return view('table', $data);
    }
    public function dataTable()
    {
        $data = [
            "title" => "Data Table",
            "data" => [
                [
                    "rendering_engine" => "Trident",
                    "browser_platform" => "Internet Explorer 4.0",
                    "engine_version" => "Win 95+",
                    "css" => "4",
                    "grade" => "X"
                ],
                [
                    "rendering_engine" => "Trident",
                    "browser_platform" => "Internet Explorer 5.0",
                    "engine_version" => "Win 95+",
                    "css" => "5",
                    "grade" => "C"
                ],
                [
                    "rendering_engine" => "Trident",
                    "browser_platform" => "Internet Explorer 5.5",
                    "engine_version" => "Win 95+",
                    "css" => "5.5",
                    "grade" => "A"
                ],
                [
                    "rendering_engine" => "Trident",
                    "browser_platform" => "Internet Explorer 6",
                    "engine_version" => "Win 98+",
                    "css" => "6",
                    "grade" => "A"
                ],
                [
                    "rendering_engine" => "Trident",
                    "browser_platform" => "Internet Explorer 7",
                    "engine_version" => "Win XP SP2+",
                    "css" => "7",
                    "grade" => "A"
                ],
                [
                    "rendering_engine" => "Trident",
                    "browser_platform" => "AOL browser (AOL desktop)",
                    "engine_version" => "Win XP",
                    "css" => "6",
                    "grade" => "A"
                ],
                [
                    "rendering_engine" => "Gecko",
                    "browser_platform" => "Firefox 1.0",
                    "engine_version" => "Win 98+ / OSX.2+",
                    "css" => "1.7",
                    "grade" => "A"
                ],
                [
                    "rendering_engine" => "Gecko",
                    "browser_platform" => "Firefox 1.5",
                    "engine_version" => "Win 98+ / OSX.2+",
                    "css" => "1.8",
                    "grade" => "A"
                ],
                [
                    "rendering_engine" => "Gecko",
                    "browser_platform" => "Firefox 2.0",
                    "engine_version" => "Win 98+ / OSX.2+",
                    "css" => "1.8",
                    "grade" => "A"
                ],
                [
                    "rendering_engine" => "Gecko",
                    "browser_platform" => "Firefox 3.0",
                    "engine_version" => "Win 2k+ / OSX.3+",
                    "css" => "1.9",
                    "grade" => "A"
                ],
                [
                    "rendering_engine" => "Gecko",
                    "browser_platform" => "Camino 1.0",
                    "engine_version" => "OSX.2+",
                    "css" => "1.8",
                    "grade" => "A"
                ],
                [
                    "rendering_engine" => "Gecko",
                    "browser_platform" => "Camino 1.5",
                    "engine_version" => "OSX.3+",
                    "css" => "1.8",
                    "grade" => "A"
                ],
                [
                    "rendering_engine" => "Gecko",
                    "browser_platform" => "Netscape 7.2",
                    "engine_version" => "Win 95+ / Mac OS 8.6-9.2",
                    "css" => "1.7",
                    "grade" => "A"
                ],
                [
                    "rendering_engine" => "Gecko",
                    "browser_platform" => "Netscape Browser 8",
                    "engine_version" => "Win 98SE+",
                    "css" => "1.7",
                    "grade" => "A"
                ],
                [
                    "rendering_engine" => "Gecko",
                    "browser_platform" => "Netscape Navigator 9",
                    "engine_version" => "Win 98+ / OSX.2+",
                    "css" => "1.8",
                    "grade" => "A"
                ],
                [
                    "rendering_engine" => "Gecko",
                    "browser_platform" => "Mozilla 1.0",
                    "engine_version" => "Win 95+ / OSX.1+",
                    "css" => "1",
                    "grade" => "A"
                ],
                [
                    "rendering_engine" => "Gecko",
                    "browser_platform" => "Mozilla 1.1",
                    "engine_version" => "Win 95+ / OSX.1+",
                    "css" => "1.1",
                    "grade" => "A"
                ],
                [
                    "rendering_engine" => "Gecko",
                    "browser_platform" => "Mozilla 1.2",
                    "engine_version" => "Win 95+ / OSX.1+",
                    "css" => "1.2",
                    "grade" => "A"
                ],
                [
                    "rendering_engine" => "Gecko",
                    "browser_platform" => "Mozilla 1.3",
                    "engine_version" => "Win 95+ / OSX.1+",
                    "css" => "1.3",
                    "grade" => "A"
                ],
                [
                    "rendering_engine" => "Gecko",
                    "browser_platform" => "Mozilla 1.4",
                    "engine_version" => "Win 95+ / OSX.1+",
                    "css" => "1.4",
                    "grade" => "A"
                ],
                [
                    "rendering_engine" => "Gecko",
                    "browser_platform" => "Mozilla 1.5",
                    "engine_version" => "Win 95+ / OSX.1+",
                    "css" => "1.5",
                    "grade" => "A"
                ],
                [
                    "rendering_engine" => "Gecko",
                    "browser_platform" => "Mozilla 1.6",
                    "engine_version" => "Win 95+ / OSX.1+",
                    "css" => "1.6",
                    "grade" => "A"
                ],
                [
                    "rendering_engine" => "Gecko",
                    "browser_platform" => "Mozilla 1.7",
                    "engine_version" => "Win 98+ / OSX.1+",
                    "css" => "1.7",
                    "grade" => "A"
                ],
                [
                    "rendering_engine" => "Gecko",
                    "browser_platform" => "Mozilla 1.8",
                    "engine_version" => "Win 98+ / OSX.1+",
                    "css" => "1.8",
                    "grade" => "A"
                ],
                [
                    "rendering_engine" => "Gecko",
                    "browser_platform" => "Seamonkey 1.1",
                    "engine_version" => "Win 98+ / OSX.2+",
                    "css" => "1.8",
                    "grade" => "A"
                ],
                [
                    "rendering_engine" => "Gecko",
                    "browser_platform" => "Epiphany 2.20",
                    "engine_version" => "Gnome",
                    "css" => "1.8",
                    "grade" => "A"
                ],
                [
                    "rendering_engine" => "Webkit",
                    "browser_platform" => "Safari 1.2",
                    "engine_version" => "OSX.3",
                    "css" => "125.5",
                    "grade" => "A"
                ],
                [
                    "rendering_engine" => "Webkit",
                    "browser_platform" => "Safari 1.3",
                    "engine_version" => "OSX.3",
                    "css" => "312.8",
                    "grade" => "A"
                ],
                [
                    "rendering_engine" => "Webkit",
                    "browser_platform" => "Safari 2.0",
                    "engine_version" => "OSX.4+",
                    "css" => "419.3",
                    "grade" => "A"
                ],
                [
                    "rendering_engine" => "Webkit",
                    "browser_platform" => "Safari 3.0",
                    "engine_version" => "OSX.4+",
                    "css" => "522.1",
                    "grade" => "A"
                ],
                [
                    "rendering_engine" => "Webkit",
                    "browser_platform" => "OmniWeb 5.5",
                    "engine_version" => "OSX.4+",
                    "css" => "420",
                    "grade" => "A"
                ],
                [
                    "rendering_engine" => "Webkit",
                    "browser_platform" => "iPod Touch / iPhone",
                    "engine_version" => "iPod",
                    "css" => "420.1",
                    "grade" => "A"
                ],
                [
                    "rendering_engine" => "Webkit",
                    "browser_platform" => "S60",
                    "engine_version" => "S60",
                    "css" => "413",
                    "grade" => "A"
                ],
                [
                    "rendering_engine" => "Presto",
                    "browser_platform" => "Opera 7.0",
                    "engine_version" => "Win 95+ / OSX.1+",
                    "css" => "-",
                    "grade" => "A"
                ],
                [
                    "rendering_engine" => "Presto",
                    "browser_platform" => "Opera 7.5",
                    "engine_version" => "Win 95+ / OSX.2+",
                    "css" => "-",
                    "grade" => "A"
                ],
                [
                    "rendering_engine" => "Presto",
                    "browser_platform" => "Opera 8.0",
                    "engine_version" => "Win 95+ / OSX.2+",
                    "css" => "-",
                    "grade" => "A"
                ],
                [
                    "rendering_engine" => "Presto",
                    "browser_platform" => "Opera 8.5",
                    "engine_version" => "Win 95+ / OSX.2+",
                    "css" => "-",
                    "grade" => "A"
                ],
                [
                    "rendering_engine" => "Presto",
                    "browser_platform" => "Opera 9.0",
                    "engine_version" => "Win 95+ / OSX.3+",
                    "css" => "-",
                    "grade" => "A"
                ],
                [
                    "rendering_engine" => "Presto",
                    "browser_platform" => "Opera 9.2",
                    "engine_version" => "Win 88+ / OSX.3+",
                    "css" => "-",
                    "grade" => "A"
                ],
                [
                    "rendering_engine" => "Presto",
                    "browser_platform" => "Opera 9.5",
                    "engine_version" => "Win 88+ / OSX.3+",
                    "css" => "-",
                    "grade" => "A"
                ],
                [
                    "rendering_engine" => "Presto",
                    "browser_platform" => "Opera for Wii",
                    "engine_version" => "Wii",
                    "css" => "-",
                    "grade" => "A"
                ],
                [
                    "rendering_engine" => "Presto",
                    "browser_platform" => "Nokia N800",
                    "engine_version" => "N800",
                    "css" => "-",
                    "grade" => "A"
                ],
                [
                    "rendering_engine" => "Presto",
                    "browser_platform" => "Nintendo DS browser",
                    "engine_version" => "Nintendo DS",
                    "css" => "8.5",
                    "grade" => "C/A1"
                ],
                [
                    "rendering_engine" => "KHTML",
                    "browser_platform" => "Konqureror 3.1",
                    "engine_version" => "KDE 3.1",
                    "css" => "3.1",
                    "grade" => "C"
                ],
                [
                    "rendering_engine" => "KHTML",
                    "browser_platform" => "Konqureror 3.3",
                    "engine_version" => "KDE 3.3",
                    "css" => "3.3",
                    "grade" => "A"
                ],
                [
                    "rendering_engine" => "KHTML",
                    "browser_platform" => "Konqureror 3.5",
                    "engine_version" => "KDE 3.5",
                    "css" => "3.5",
                    "grade" => "A"
                ],
                [
                    "rendering_engine" => "Tasman",
                    "browser_platform" => "Internet Explorer 4.5",
                    "engine_version" => "Mac OS 8-9",
                    "css" => "-",
                    "grade" => "X"
                ],
                [
                    "rendering_engine" => "Tasman",
                    "browser_platform" => "Internet Explorer 5.1",
                    "engine_version" => "Mac OS 7.6-9",
                    "css" => "1",
                    "grade" => "C"
                ],
                [
                    "rendering_engine" => "Tasman",
                    "browser_platform" => "Internet Explorer 5.2",
                    "engine_version" => "Mac OS 8-X",
                    "css" => "1",
                    "grade" => "C"
                ],
                [
                    "rendering_engine" => "Misc",
                    "browser_platform" => "NetFront 3.1",
                    "engine_version" => "Embedded devices",
                    "css" => "-",
                    "grade" => "C"
                ],
                [
                    "rendering_engine" => "Misc",
                    "browser_platform" => "NetFront 3.4",
                    "engine_version" => "Embedded devices",
                    "css" => "-",
                    "grade" => "A"
                ],
                [
                    "rendering_engine" => "Misc",
                    "browser_platform" => "Dillo 0.8",
                    "engine_version" => "Embedded devices",
                    "css" => "-",
                    "grade" => "X"
                ],
                [
                    "rendering_engine" => "Misc",
                    "browser_platform" => "Links",
                    "engine_version" => "Text only",
                    "css" => "-",
                    "grade" => "X"
                ],
                [
                    "rendering_engine" => "Misc",
                    "browser_platform" => "Lynx",
                    "engine_version" => "Text only",
                    "css" => "-",
                    "grade" => "X"
                ],
                [
                    "rendering_engine" => "Misc",
                    "browser_platform" => "IE Mobile",
                    "engine_version" => "Windows Mobile 6",
                    "css" => "-",
                    "grade" => "C"
                ],
                [
                    "rendering_engine" => "Misc",
                    "browser_platform" => "PSP browser",
                    "engine_version" => "PSP",
                    "css" => "-",
                    "grade" => "C"
                ],
                [
                    "rendering_engine" => "Other browsers",
                    "browser_platform" => "All others",
                    "engine_version" => "-",
                    "css" => "-",
                    "grade" => "U"
                ]
            ]
        ];
        return view('data-table', $data);
    }
}
