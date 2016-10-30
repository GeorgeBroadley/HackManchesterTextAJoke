<table>
    <tr>
        <th>Joke Title</th>
        <th>Joke Punchline</th>
        <th>Unflag Joke</th>
    </tr>
    @foreach ($jokes as $joke)
    <tr>
        <td>{{ $joke->joke }}</td>
        <td>{{ $joke->punchline }}</td>
        <td><a href="/flaggedjokes/unflag/{{ $joke->id }}">Unflag Joke</a></td>
    </tr>
    @endforeach
</table>
