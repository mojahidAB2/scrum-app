{{--appel de navigation--}}
@include('parties.navigation')
{{--fin de navigation--}}

{{ $nom }}
<p>utilisation de blade</p>
<p>boucle foreach</p>
<h5>cours :</h5>
<table border="4" style="width: 100%" >
    <tr><th>cours</th></tr>
    @foreach ($langage as $c)
        <tr><td>{{ $c }}</td></tr>
    @endforeach
    
</table>