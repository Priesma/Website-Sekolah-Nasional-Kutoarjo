<div class="bg-white rounded shadow p-4">
    <h3 class="text-lg font-semibold mb-3">Galeri Terbaru</h3>
    <table class="w-full text-left">
        <thead>
            <tr>
                <th class="py-2">Gambar</th>
                <th class="py-2">Judul</th>
                <th class="py-2">Kategori</th>
            </tr>
        </thead>
        <tbody>
            @foreach($galleries as $g)
                <tr>
                    <td class="py-2"><img src="{{ asset('storage/' . $g->foto_url) }}" style="width:64px;height:48px;object-fit:cover;border-radius:4px"></td>
                    <td class="py-2">{{ $g->judul }}</td>
                    <td class="py-2">{{ $g->kategori }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
