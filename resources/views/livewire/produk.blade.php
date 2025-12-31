<div>

<div class="container">
    <div class="row my-2">
        <div class="col-12">
        <button wire:click="pilihMenu('lihat')"
            class="btn {{ $pilihanMenu=='lihat' ? 'btn-primary' : 'btn-outline-primary' }}">
            Semua Produk 
        </button>
        <button wire:click="pilihMenu('tambah')" 
            class="btn {{ $pilihanMenu=='lihat' ? 'btn-primary' : 'btn-outline-primary' }}"><i><img src="https://img.icons8.com/color/20/add--v1.png" alt=""></i>
            Tambah Produk 
        </button>
        <button wire:loading class="btn btn-info">
            Loading ... 
        </button>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            @if($pilihanMenu=='lihat')
            <div>
                <div class="card-body">
                    <table>
                        <thead>
                            <th>No</th>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Harga</th>                            
                            <th>Stok</th>                            
                            <th>Data</th>                            
                        </thead>
                        <tbody>
                            @foreach ($semuaProduk as $produk)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $produk->kode}}</td>
                                <td>{{ $produk->nama }}</td>
                                <td>{{ $produk->harga }}</td>
                                <td>{{ $produk->stok }}</td>
                                <td>
    <button wire:click="pilihEdit({{ $produk->id }})"
        class="btn {{ $pilihanMenu=='edit' ? 'btn-primary' : 'btn-outline-primary' }}">
        <img src="https://img.icons8.com/fluency-systems-filled/20/000000/edit.png">
        Edit Produk
    </button>

    <button wire:click="pilihHapus({{ $produk->id }})"
        class="btn {{ $pilihanMenu=='hapus' ? 'btn-primary' : 'btn-outline-primary' }}">
        <img src="https://img.icons8.com/color/20/000000/delete-forever.png">
        Hapus Produk
    </button>
</td>

                                    
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            @elseif ($pilihanMenu=='tambah')
            <div class="card border-primary">
                <div class="card-header">
                    Tambah Produk
                </div>
                <div class="card-body">
                    <form wire:submit='simpan'>
                        <label>Nama</label>
                        <input type="text" class="form-control" wire:model='nama'/>
                        @error('nama')
                        <span class="tect-danger">{{ $message}}</span>
                        @enderror
                        <br>
                        <label>Kode</label>
                        <input type="text" class="form-control" wire:model='kode'/>
                        @error('kode')
                        <span class="tect-danger">{{ $message}}</span>
                        @enderror
                        <br>
                        <label>Harga</label>
                        <input type="number" class="form-control" wire:model='harga'/>
                        @error('harga')
                        <span class="tect-danger">{{ $message}}</span>
                        @enderror
                        <br>
                        <label>Stok</label>
                        <input type="number" class="form-control" wire:model='stok'/>
                        @error('stok')
                        <span class="tect-danger">{{ $message}}</span>
                        @enderror
                        <br>
                        <button type="submit" class="btn btn-primary mt-3">SIMPAN</button>
                    </form>
                </div>
            </div>
            @elseif ($pilihanMenu=='edit')
            <div class="card border-primary">
                <div class="card-header">
                  Edit Produk   
                </div>
               <div class="card-body">
                <form wire:submit='simpanEdit'>
                     <label>Nama</label>
                        <input type="text" class="form-control" wire:model='nama'/>
                        @error('nama')
                        <span class="tect-danger">{{ $message}}</span>
                        @enderror
                        <br>
                        <label>Kode</label>
                        <input type="text" class="form-control" wire:model='kode'/>
                        @error('kode')
                        <span class="tect-danger">{{ $message}}</span>
                        @enderror
                        <br>
                        <label>Harga</label>
                        <input type="number" class="form-control" wire:model='harga'/>
                        @error('harga')
                        <span class="tect-danger">{{ $message}}</span>
                        @enderror
                        <br>
                        <label>Stok</label>
                        <input type="number" class="form-control" wire:model='stok'/>
                        @error('stok')
                        <span class="tect-danger">{{ $message}}</span>
                        @enderror
                        <br>
                        <button type="submit" class="btn btn-primary mt-3">SIMPAN</button>
                </form>
               </div>
            </div>
            @elseif ($pilihanMenu=='hapus')
            <div class="card border-danger">
                <div class="card-header bg-danger text-white">
                    Hapus Produk
                </div>
                <div class="card-body">
                    Apakah kamu yakin akan menghapus produk ini ?
                    <p>Kode : {{ $produkTerpilih->kode }}</p>
                    <p>Nama : {{ $produkTerpilih->nama }}</p>
                    <button class="btn btn-danger" wire:click='hapus'>HAPUS</button>
                    <button class="btn btn-secondary" wire:click='batal'>BATAL</button>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
</div>
