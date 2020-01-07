# WhatsApp Generator

Ini merupakan web Whatsapp link/page generator sederhana, fungsinya sama dengan `https://api.whatsapp.com/send?phone=.....` namun kita bisa mengkustomisasinya sedemikian rupa, sebagai contoh jika lagi males buat landing page kita bisa menambahkan Pixel Facebook Ads atau Google Adwords ke halaman link generator ini.

![whatsapp-generator-link](https://user-images.githubusercontent.com/760764/71894090-e6bd6180-317f-11ea-8d6f-b487a192e9a9.jpg) ![whatsapp-generator-preview](https://user-images.githubusercontent.com/760764/71894091-e6bd6180-317f-11ea-93a2-7773c5f5ef74.jpg)

## Instalasi
- [Download](https://github.com/ewwink/WhatsApp-Generator/archive/master.zip) repo ini dalam bentuk `.zip` 
- Extract `master.zip` ganti nama foldernya, misalnya jadi `wa` sehingga nanti kita bisa mengaksesnya dengan URL `http://example.com/wa/`
- Upload folder dan file tersebut ke web hosting
- jika nama folder tadi bukan `wa`  misalkan menjadi `kustomfolder` edit file `.htaccess` dan ganti

	    ...
	    RewriteBase /wa/
	    ...
	    RewriteRule . /wa/index.php [L]

  menjadi

	    ...
	    RewriteBase /kustomfolder/
	    ...
	    RewriteRule . /kustomfolder/index.php [L]

- Untuk yang servernya memakai Nginx bisa cari tutorial `nginx wordpress htaccess` di Google karena .htaccess yang di gunakan dalam aplikasi web ini sama persis.
- buat yang belum paham pemograman dan ingin menambahkan `Pixel iklan` silahkan paste kodenya langsung ke `footer.php` menggunakan notepad atau text editor lainnya.
- Selesai

Semoga Sukses,
ErwinS