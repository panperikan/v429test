showです

@csrf

                    
                    
                    <form method="GET" action="{{route('contact.edit', ['id' => $contact->id])}}">
                    @csrf
                    {{ $contact->your_name}}
                    {{ $contact->title}}
                    {{ $contact->email}}
                    {{ $contact->url}}
                    {{ $gender}}
                    {{ $age}}
                    {{ $contact->contact}}
                    
                    <input class="btn btn-info" type="submit" value="変更する">