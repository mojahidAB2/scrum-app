
{{-- commentaire dans blade --}}

<p>boucle foreach</p>
<h5>cours :</h5>
<table border="1" style="width: 100%">
    <tr><th>cours</th></tr>
    @foreach ($cours as $c)
        <tr><td>{{ $c }}</td></tr>
    @endforeach
    
</table>
<p>condition if</p>
@if (count($cours) > 0)
    <p>il y a des cours</p>
@else

    <p>il n'y a pas de cours</p>
@endif
<p>unless</p>
@unless (count($cours) > 0)
    <p>il n'y a pas de cours</p>
@else
    <p>il y a des cours</p>
@endunless
<p>isset(est ce que  la valeur existe dans la memoire ? null?)</p>
@isset($nom)
    <p>le nom est : {{ $nom }}</p>
@else
    <p>il n'y a pas de nom</p>
@endisset
<p>empty(est ce que la valeur est vide ou non ?)</p>
@empty($nom)
    <p>le nom est : {{ $nom }}</p>
    <p>il n'y a pas de cours</p>
@else
    <p>il y a des cours</p>
@endempty
<p>switch</p>
@switch($nom)
    @case('ahmed')
        <p>le nom est ahmed</p>
        @break
    @case('mohamed')
        <p>le nom est mohamed</p>
        @break
    @default
        <p>le nom est inconnu</p>
        @break
@endswitch 
