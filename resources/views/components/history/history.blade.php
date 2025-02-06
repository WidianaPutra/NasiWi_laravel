<div class="bg-gray-100 min-h-screen">
    @if (count($datas) == 0)
        <h1 class="text-center text-3xl text-gray-500 py-2">Belum ada riwayat pembelian</h1>
    @else
        <div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5 p-3">
                @foreach ($datas as $data)
                    <div class="w-full shadow-2xl mt-2 px-2 rounded-xl min-h-[60px] bg-white cursor-pointer">
                        <div class="flex justify-between p-2">
                            <h1 class="text-[18px] font-bold">{{ $data['created_at'] }}</h1>
                            <h1 class="text-[18px] font-bold">{{ ucwords($data['status']) }}</h1>
                        </div>
                        <p class="p-2 text-[17px]">{{ $data['order'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    @endif
</div>
