
<x-navbar />


<section class="relative w-full min-h-screen pt-20 pb-16 px-4 bg-gradient-to-br from-blue-50 via-white to-yellow-50 overflow-hidden">
	<!-- Dekorasi lingkaran background -->
	<div class="pointer-events-none">
		<div class="absolute -top-24 -left-24 w-72 h-72 bg-yellow-200 rounded-full opacity-60 -z-10"></div>
		<div class="absolute bottom-0 right-0 w-80 h-80 bg-blue-200 rounded-full opacity-50 -z-10"></div>
	</div>
	<div class="relative grid grid-cols-1 md:grid-cols-2 gap-12 z-10 max-w-6xl mx-auto">
		<div class="flex flex-col justify-center">
			<h1 class="text-5xl md:text-6xl font-extrabold mb-6 text-blue-700 tracking-tight drop-shadow">About Us</h1>
			<p class="mb-6 text-gray-700 text-xl leading-relaxed font-medium">
				<span class="text-yellow-500 font-semibold">Selamat datang di Educaty</span>, rumah belajar yang dirancang untuk <span class="text-blue-500">membantu</span> setiap siswa mencapai potensi terbaiknya. Kami <span class="text-blue-500">percaya bahwa</span> setiap anak memiliki cara belajar yang unik, dan <span class="text-blue-500">tugas kami</span> adalah menemani, membimbing, serta menginspirasi mereka untuk terus berkembang.
			</p>
			<img src="/images/aboutimg1.png" alt="Belajar" class="rounded-2xl shadow-2xl mt-4 w-full max-w-md hover:scale-105 transition-transform duration-300">
		</div>
		<div class="flex flex-col gap-8">
			<img src="/images/aboutimg2.png" alt="Belajar" class="rounded-2xl shadow-2xl w-full max-w-md mb-2 hover:scale-105 transition-transform duration-300">
			<div class="bg-white bg-opacity-80 rounded-xl shadow p-6">
				<h2 class="text-3xl font-bold mb-2 text-blue-700">Visi</h2>
				<p class="text-gray-700 text-lg">Menjadi platform bimbingan belajar terpercaya yang mencetak generasi pembelajar <span class="text-yellow-500 font-semibold">cerdas, mandiri</span>, dan berkarakter.</p>
			</div>
			<div class="bg-white bg-opacity-80 rounded-xl shadow p-6">
				<h2 class="text-3xl font-bold mb-2 text-blue-700">Misi</h2>
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
