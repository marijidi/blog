@foreach ($categories as $category)
                                    <div class="col">
                                        <div class="card h-90">
                                            <img src="{{asset('images')}}/{{$category->image}}" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title" style="color: white">{{ $category->name }}</h5>
                                                <p class="card-text"  style="color: white">{{ $category->description }}</p>
                                                <div class="card-footer text-center">
                                                    <p class="card-text"  style="color: white">Da click en el boton mostrar para ver los servicios que te ofrece esta sección</p>
                                                    <a href="/services/{{ $category->category_id }}"
                                                        class="btn mt-1"  style="color: white">Mostrar</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach