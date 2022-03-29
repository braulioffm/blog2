<x-app-layout>

    <div class="container py-8">

        <div class="py-8">
            <h1 class="uppercase text-center text-3xl font-bold">Categoría: {{$category->name}}</h1>
        </div>   
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

            @foreach($posts as $post)

                @if($loop->first)
                <article class="w-full h-80 bg-cover bg-center md:col-span-2 lg:col-span-2" style="background-image: url( {{Storage::url($post->image->url)}} )">
                    <div class="w-full h-full px-8 flex flex-col justify-center">

                        <div>
                            @foreach($post->tags as $tag)
                                <a href="" class="inline-block px-3 h-6 bg-{{$tag->color}}-600 text-white rounded-full">{{$tag->name}}</a>
                            @endforeach
                        </div>

                        <h1 class="text-4xl text-white leading-8 font-bold">
                            <a href="{{route('posts.show', $post)}}">{{$post->name}}</a>
                        </h1>
                    </div>
                </article>
                @continue 
                @endif

                <article class="w-full h-80 bg-cover bg-center" style="background-image: url( {{Storage::url($post->image->url)}} )">
                    <div class="w-full h-full px-8 flex flex-col justify-center">

                        <div>
                            @foreach($post->tags as $tag)
                                <a href="" class="inline-block px-3 h-6 bg-{{$tag->color}}-600 text-white rounded-full">{{$tag->name}}</a>
                            @endforeach
                        </div>

                        <h1 class="text-4xl text-white leading-8 font-bold">
                            <a>{{$post->name}}</a>
                        </h1>
                    </div>
                </article>

            @endforeach

            

        </div>

        <div class="block py-6">{{ $posts->links() }}</div>

    </div>

</x-app-layout>