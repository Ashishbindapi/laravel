<h1>Ram Kumar</h1>
<h2>Welcome {{ $name ?? 'Devloper'}}</h2>

@unless ($name == 'Ashish Bindra Ji')
    this is not Ashish Bindra Ji
@endunless

@isset($name)
    {{ $name }}
@endisset