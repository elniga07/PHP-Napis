<?php

$data = '[
    {
        "no": "101",
        "judul": "Dilan 1990",
        "genre": "Romance",
        "penulis": "Pidi Baiq",
        "penerbit": "Airlangga",
        "rilis": "2013"
    },
    {
        "no": "102",
        "judul": "Dilan 1991",
        "genre": "Romance",
        "penulis": "Pidi Baiq",
        "penerbit": "Airlangga",
        "rilis": "2014"
    },
    {
        "no": "103",
        "judul": "Milea",
        "genre": "Romance",
        "penulis": "Pidi Baiq",
        "penerbit": "Airlangga",
        "rilis": "2018"
    },
    {
        "no": "104",
        "judul": "Ancika",
        "genre": "Romance",
        "penulis": "Pidi Baiq",
        "penerbit": "Airlangga",
        "rilis": "2021"
    },
    {
        "no": "105",
        "judul": "Sangkuriang",
        "genre": "Legenda",
        "penulis": "Yuliadi Soekardi",
        "penerbit": "Pustaka Setia",
        "rilis": "2002"
    },
    {
        "no": "106",
        "judul": "Bumi Manusia",
        "genre": "Historical",
        "penulis": "Ramoedia",
        "penerbit": "Lentera dipantara",
        "rilis": "1980"
    },
    {
        "no": "107",
        "judul": "Laskar Pelangi",
        "genre": "Drama",
        "penulis": "Andrea Hirata",
        "penerbit": "Bentang Pustaka",
        "rilis": "2005"
    },
    {
        "no": "108",
        "judul": "Perahu Kertas",
        "genre": "Romance",
        "penulis": "D Leestari",
        "penerbit": "Bentang Pustaka",
        "rilis": "2009"
    },
    {
        "no": "109",
        "judul": "Ayat-Ayat Cinta",
        "genre": "Romance",
        "penulis": "Habiburahman",
        "penerbit": "Republika",
        "rilis": "2004"
    },
    {
        "no": "110",
        "judul": "Negri 5 Menara",
        "genre": "Inpirational",
        "penulis": "fuadi",
        "penerbit": "Gramedia",
        "rilis": "2009"
    },
    {
        "no": "111",
        "judul": "Super Nova",
        "genre": "Sci - Fi",
        "penulis": "Dee Leestari",
        "penerbit": "True Dee Books",
        "rilis": "2001"
    },
    {
        "no": "112",
        "judul": "Filosofi Kopi",
        "genre": "Drama",
        "penulis": "Dee Leestari",
        "penerbit": "Bentang Pustaka",
        "rilis": "2006"
    },
    {
        "no": "113",
        "judul": "Hujan",
        "genre": "Sci - Fi",
        "penulis": "Tereliye",
        "penerbit": "Republika",
        "rilis": "2014"
    },
    {
        "no": "114",
        "judul": "Pulang",
        "genre": "Thriller",
        "penulis": "Leyla",
        "penerbit": "KPG",
        "rilis": "2012"
    },
    {
        "no": "115",
        "judul": "Recto Ferso",
        "genre": "Romance",
        "penulis": "D Leestari",
        "penerbit": "Bentang Pustaka",
        "rilis": "2008"
    },
    {
        "no": "116",
        "judul": "Sang Pemimpi",
        "genre": "Drama",
        "penulis": "Andrea",
        "penerbit": "Bentang Pustaka",
        "rilis": "2006"
    },
    {
        "no": "117",
        "judul": "Madre",
        "genre": "Drama",
        "penulis": "D Leestari",
        "penerbit": "Bentang Pustaka",
        "rilis": "2011"
    },
    {
        "no": "118",
        "judul": "Gadjah Mada",
        "genre": "Historycal",
        "penulis": "Langit",
        "penerbit": "Tiga Serangkay",
        "rilis": "2011"
    },
    {
        "no": "119",
        "judul": "Serlock Holmes",
        "genre": "Mistery",
        "penulis": "Arthur",
        "penerbit": "Gramedia",
        "rilis": "2010"
    },
    {
        "no": "120",
        "judul": "Laut Bercerita",
        "genre": "Drama",
        "penulis": "D Leestari",
        "penerbit": "Bentang Pustaka",
        "rilis": "2017"
    }

]':'
$list = json_decode($data);

echo "<center><h2>Kumpulan Novel Terbaru</h2></center>";
echo "<table align='center' border='3' cellpadding ='10' cellspacing = '0' width='90%'>
<thead>
        <tr bgcolor='grey' style='color: white;'>
            <th><h3>No</h3></th>
            <th><h3>Judul</h3></th>
            <th><h3>Genre</h3></th>
            <th><h3>Penulis</h3></th>
            <th><h3>Penerbit</h3></th>
            <th><h3>Tahun Rilis</h3></th>
        </tr>";
echo "</thead>";
echo "<tbody>";

foreach($list as $novel){
    
    echo "<tr>
            <td>{$novel ->no}</td>
            <td>{$novel ->judul}</td>
            <td>{$novel ->genre}</td>
            <td>{$novel ->penulis}</td>
            <td>{$novel ->penerbit}</td>
            <td>{$novel ->rilis}</td>
        </tr>";
        }
    echo "</tbody>" ;
    echo "</table>";
   

?>