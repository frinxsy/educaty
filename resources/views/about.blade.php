
<x-navbar />

<section class="relative bg-white px-8 pt-10 pb-4 max-w-5xl mx-auto rounded-2xl shadow-xl mt-8 overflow-hidden border border-gray-200">
	<!-- Dekorasi lingkaran -->
	<div class="absolute -top-10 -left-10 w-48 h-48 bg-yellow-400 rounded-full -z-10 opacity-80"></div>
	<div class="absolute top-24 right-0 w-24 h-24 bg-blue-500 rounded-full -z-10 opacity-80"></div>
	<div class="absolute bottom-0 left-1/3 w-16 h-16 bg-blue-400 rounded-full -z-10 opacity-80"></div>
	<div class="absolute bottom-10 right-10 w-32 h-32 bg-yellow-300 rounded-full -z-10 opacity-80"></div>

	<div class="grid grid-cols-1 md:grid-cols-2 gap-8">
		<div>
			<h1 class="text-5xl font-extrabold mb-4 text-black">About Us</h1>
			<p class="mb-2 text-gray-700 text-lg leading-relaxed">
				<span class="text-yellow-500 font-semibold">Selamat datang di Educaty</span>, rumah belajar yang dirancang untuk <span class="text-blue-500">membantu</span> setiap siswa mencapai potensi terbaiknya. Kami <span class="text-blue-500">percaya bahwa</span> setiap anak memiliki cara belajar yang unik, dan <span class="text-blue-500">tugas kami</span> adalah menemani, membimbing, serta menginspirasi mereka untuk terus berkembang.
			</p>
			<img src="/images/aboutimg1.png" alt="Belajar" class="rounded-xl shadow-lg mt-6 w-full max-w-md">
		</div>
		<div class="flex flex-col gap-8">
			<img src="/images/aboutimg2.png" alt="Belajar" class="rounded-xl shadow-lg w-full max-w-md">
			<div>
				<h2 class="text-3xl font-bold mb-2">Visi</h2>
				<p class="text-gray-700 text-lg">Menjadi platform bimbingan belajar terpercaya yang mencetak generasi pembelajar <span class="text-yellow-500 font-semibold">cerdas, mandiri</span>, dan berkarakter.</p>
			</div>
			<div>
				<h2 class="text-3xl font-bold mb-2">Misi</h2>
				<ul class="list-disc pl-5 text-gray-700 text-lg">
					<li>Memberikan bimbingan belajar yang berkualitas, menyenangkan, dan <span class="text-blue-500">personal</span>, agar siswa:
						<ul class="list-disc pl-5">
							<li>Lebih percaya diri menghadapi ujian</li>
							<li>Memahami konsep, bukan hanya menghafal</li>
							<li>Mengembangkan kebiasaan belajar yang efektif</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>

<x-footer />
