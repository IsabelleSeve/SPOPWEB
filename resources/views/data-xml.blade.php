<?xml version="1.0" encoding="UTF-8"?>
<data>
@foreach ($registros as $item)
    <item>
        <nome>{{ $item->nome }}</nome>
        <data_descoberta>{{ $item->data_descoberta }}</data_descoberta>
        <comestivel>{{ $item->comestivel }}</comestivel>
        <altura_media>{{ $item->altura_media }}</altura_media>
        <quantidade_petalas>{{ $item->quantidade_petalas }}</quantidade_petalas>
        <cor_principal>{{ $item->cor_principal }}</cor_principal>
    </item>
@endforeach
</data>
