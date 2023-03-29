@foreach ($categories as $category)
                                    <div class="col">
                                        <div class="card h-90">
                                          <img src="{{asset('images')}}/{{$category->image}}" alt="" class="card-img-top"/>
                                            <div class="card-body">
                                                <h5 class="card-title">{{ $category->name }}</h5>
                                                <p class="card-text">{{ $category->description }}</p>
                                                <div class="card-footer text-center">
                                                    <p class="card-text">Da click en el boton mostrar para ver los servicios que te ofrece esta sección</p>
                                                    <a href="/services/{{ $category->category_id }}"
                                                        class="btn mt-1">Mostrar</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach