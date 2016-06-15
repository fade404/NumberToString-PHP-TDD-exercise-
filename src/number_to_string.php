<?php

function numberToString($number) {


    $minus = '';
    if ($number < 0) {
        $number = abs($number);
        $minus = 'minus ';
    }

    $jednostki = intval($number % 10);
    $dziesiatki = intval(($number % 100 - $jednostki) / 10);
    $setki = intval(($number - $dziesiatki * 10 - $jednostki) / 100);


    $s = 0;

    switch ($setki) {
        case 0: $s = NULL;
            break;
        case 1: $s = "sto";
            break;
        case 2: $s = "dwieście";
            break;
        case 3: $s = "trzysta";
            break;
        case 4: $s = "czterysta";
            break;
        case 5: $s = "pięćset";
            break;
        case 6: $s = "sześćset";
            break;
        case 7: $s = "siedemset";
            break;
        case 8: $s = "osiemset";
            break;
        case 9: $s = "dziewięćset";
            break;
    };
    
    switch ($dziesiatki) {
        case 0: $k = NULL;
            break;
        case 1: $k = "dziesięć";
            break;
        case 2: $k = "dwadzieścia";
            break;
        case 3: $k = "trzydzieści";
            break;
        case 4: $k = "czterdzieści";
            break;
        case 5: $k = "pięćdziesiąt";
            break;
        case 6: $k = "sześćdziesiąt";
            break;
        case 7: $k = "siedemdziesiąt";
            break;
        case 8: $k = "osiemdziesiąt";
            break;
        case 9: $k = "dziewięćdziesiąt";
            break;
    };

    switch ($jednostki) {
        case 0: $j = 'zero';
            break;
        case 1: $j = "jeden";
            break;
        case 2: $j = "dwa";
            break;
        case 3: $j = "trzy";
            break;
        case 4: $j = "cztery";
            break;
        case 5: $j = "pięć";
            break;
        case 6: $j = "sześć";
            break;
        case 7: $j = "siedem";
            break;
        case 8: $j = "osiem";
            break;
        case 9: $j = "dziewięć";
            break;
    };




    if ($number > 10 && $number < 20) {
        switch ($number) {
            case 11:
                $wynik = 'jedenaście';
                return $wynik;
                break;
            case 12:
                $wynik = 'dwanaście';
                return $wynik;
                break;
            case 13:
                $wynik = 'trzynaście';
                return $wynik;
                break;
            case 14:
                $wynik = 'czternaście';
                return $wynik;
                break;
            case 15:
                $wynik = 'piętnaście';
                return $wynik;
                break;
            case 16:
                $wynik = 'szesnaście';
                return $wynik;
                break;
            case 17:
                $wynik = 'siedemnaście';
                return $wynik;
                break;
            case 18:
                $wynik = 'osiemnaście';
                return $wynik;
                break;
            case 19:
                $wynik = 'dziewiętnaście';
                return $wynik;
                break;
        }
    }


    if ($number < 10) {
        return $minus . $j;
    }
    if ($number < 100 && $jednostki == 0) {
        return $minus . $k;
    }
    if ($number < 100 && $jednostki > 0) {
        return $minus . $k . ' ' . $j;
    }
    if ($number < 1000 && $dziesiatki == 0) {
        return $minus . $s;
    }

    if ($number < 1000 && $dziesiatki > 0 && $jednostki == 0) {
        return $minus . $s . ' ' . $k;
    }
    if ($number < 1000 && $dziesiatki > 0 && $jednostki > 0) {
        return $minus . $s . ' ' . $k . ' ' . $j;
    }
    if ($number > 999) {
        return false;
    }
}
