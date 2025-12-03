<!-- Categories Section -->
@if ($categories->count() > 0)
    <div class="mb-8 animate-fade-up" style="animation-delay: 0.1s">
        <h2 class="text-xl font-bold text-gray-900 mb-4 flex items-center gap-2">
            <span class="w-1 h-6 bg-gradient-to-b from-indigo-500 to-purple-500 rounded-full"></span>
            Pilih Blok Anda
        </h2>

        <div class="grid grid-cols-2 gap-4">
            @foreach ($categories as $index => $category)
                <a href="{{ route('landing.filter', ['categoryId' => $category->id]) }}"
                    class="card bg-white rounded-xl p-5 shadow-lg cursor-pointer group relative overflow-hidden transition-all hover:shadow-xl"
                    style="animation-delay: {{ $index * 0.1 + 0.2 }}s">
                    <div
                        class="absolute inset-0 bg-gradient-to-br from-indigo-50 to-purple-50 opacity-0 group-hover:opacity-100 transition-opacity">
                    </div>
                    <div class="relative z-10 flex flex-col items-center">
                        <div class="icon-container w-16 h-16 rounded-2xl flex items-center justify-center mb-3 shadow-lg"
                            @if ($category->color_class) style="background: {{ $category->color_class }}"
                             @else
                             style="background: linear-gradient(135deg, #8b5cf6, #7c3aed)" @endif>
                            @if ($category->url_icon)
                                <img src="{{ asset($category->url_icon) }}" alt="{{ $category->name }}"
                                    class="w-10 h-10 object-contain">
                            @else
                                <i class="bi {{ $category->icon_class ?? 'bi-house' }} text-2xl text-white"></i>
                            @endif
                        </div>
                        <h3 class="font-semibold text-gray-900">{{ $category->name }}</h3>
                        @if ($category->description)
                            <p class="text-sm text-gray-500 mt-1 text-center">{{ $category->description }}</p>
                        @endif
                    </div>
                </a>
            @endforeach
        </div>
    </div>
@else
    <div class="bg-white rounded-xl p-6 text-center shadow-lg mb-8 animate-fade-up">
        <i class="bi bi-exclamation-circle text-5xl text-gray-400 mb-3"></i>
        <p class="text-gray-600 font-medium">Kategori belum tersedia</p>
    </div>
@endif


