<div class="max-w-md mx-auto p-4 bg-gray-100 shadow-lg rounded-lg">
    <form action="/api/orders" method="POST" class="space-y-4">
        @csrf
        <div>
            <h1 class="text-lg font-semibold">Nasi</h1>
            @foreach ($menuData as $data)
                @if ($data['category'] === '0')
                    <label class="flex items-center space-x-2">
                        <input type="radio" name="nasi" value="{{ $data['menu'] }}" class="text-blue-500">
                        <span>{{ $data['menu'] }}</span>
                    </label>
                @endif
            @endforeach
        </div>
        <div>
            <h1 class="text-lg font-semibold">Lauk</h1>
            @foreach ($menuData as $data)
                @if ($data['category'] === '1')
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" name="lauk[]" value="{{ $data['menu'] }}" class="text-blue-500">
                        <span>{{ $data['menu'] }}</span>
                    </label>
                @endif
            @endforeach
        </div>
        <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600">Submit</button>
    </form>
</div>
