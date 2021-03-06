@extends('layouts.master')

@section('meta_description', 'На kamaz-61.ru можно купить ' .  $parts->title . ' по самой выгодной цене в Южном Федеральном Округе. Консультации по выбору +7-906-181-50-14')   

@section('title', ' Запчасти - продажа | ' . $parts->title )

@section('content')


<div class="p-3 w-100 h-100" style="margin-left: auto; margin-right: auto;">
    <h3 class="text-center">{{$parts->title}}</h3>
    <div class="tbl-content-view bg-light">
        <table class="table">
            <th class="text-right">Код запчасти</th>
            <th class="text-right">Наименование</th>
            <tbody>
                @isset($parts->parts_tab)                               
                        
                <?php
                $string = $parts->parts_tab;
                $separator = "\t\n";
                
                $array_words = [];
                $tok = strtok($string, $separator);
                
                while($tok) {
                    $array_words[] = $tok;
                    $tok = strtok($separator);
                }
                // var_dump($array_words);
                $array = array_chunk($array_words, 2); ?>
                    <?php foreach ($array as $items): ?>
                        <tr>
                        <?php foreach ($items as $row): ?>
                            <td class="text-right"><?php echo $row; ?></td>
                        <?php endforeach; ?>
                        </tr>
                    <?php endforeach; ?>
                @endisset                          
            
            </tbody>
        </table>
    </div>
</div>

@endsection