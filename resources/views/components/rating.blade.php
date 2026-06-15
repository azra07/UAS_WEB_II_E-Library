<!-- resources/views/components/rating.blade.php -->

<!-- 1. NOTIFIKASI TOAST (Muncul otomatis saat ulasan berhasil dikirim) -->
@if(session('success'))
    <div id="toast" class="fixed top-24 right-8 bg-[#4B2A24] text-[#F5F2DE] px-6 py-4 rounded-lg shadow-lg z-50 border border-[#D8D2C0] flex items-center gap-3">
        <span class="font-medium text-sm">{{ session('success') }}</span>
        <button onclick="document.getElementById('toast').remove()" class="text-xs opacity-70 hover:opacity-100 font-bold">✕</button>
    </div>
    <script>
        setTimeout(() => {
            const toast = document.getElementById('toast');
            if(toast) toast.remove();
        }, 4000);
    </script>
@endif

<!-- 2. MODAL POPUP: WRITE A REVIEW -->
<div id="reviewModal" class="fixed inset-0 bg-black/60 items-center justify-center hidden z-50 transition-opacity">
    <div class="bg-[#FAF8F0] border border-[#BDAF9C] w-full max-w-lg p-8 rounded-xl card-shadow relative mx-4">
        
        <!-- Tombol Silang (Tutup Modal) -->
        <button onclick="closeReviewModal()" class="absolute top-4 right-4 text-gray-500 hover:text-black transition">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>

        <!-- Judul Modal -->
        <h3 class="font-judul text-4xl font-bold text-[#2F1C17] mb-6">Write a Review</h3>

        <!-- Form Ulasan -->
        <form action="{{ route('buku.review.store', $book->id) }}" method="POST" class="space-y-6">
            @csrf
            
            <!-- Pilihan Rating Bintang -->
            <div class="flex flex-col gap-2">
                <label class="text-xs font-semibold text-[#2F1C17] uppercase tracking-wider">How would you rate this book?</label>
                <select name="rating" required class="w-full border border-[#BDAF9C] bg-transparent px-4 py-3 rounded-lg outline-none focus:border-[#2F1C17] cursor-pointer text-yellow-600 font-medium">
                    <option value="5" class="text-yellow-600">★★★★★ 5 Stars (Excellent)</option>
                    <option value="4" class="text-yellow-600">★★★★☆ 4 Stars (Good)</option>
                    <option value="3" class="text-yellow-600">★★★☆☆ 3 Stars (Average)</option>
                    <option value="2" class="text-yellow-600">★★☆☆☆ 2 Stars (Poor)</option>
                    <option value="1" class="text-yellow-600">★☆☆☆☆ 1 Star (Terrible)</option>
                </select>
            </div>

            <!-- Input Deskripsi Ulasan -->
            <div class="flex flex-col gap-2">
                <label class="text-xs font-semibold text-[#2F1C17] uppercase tracking-wider">Your Review</label>
                <textarea name="review" rows="5" required placeholder="What did you think of the story, style, and themes?..." class="w-full bg-transparent border border-[#BDAF9C] rounded-lg p-4 outline-none focus:border-[#2F1C17] transition-all resize-none text-[16px] text-gray-800 leading-relaxed"></textarea>
            </div>

            <!-- Tombol Submit -->
            <button type="submit" class="w-full bg-[#4B2A24] hover:bg-[#311813] text-white py-4 rounded-lg font-semibold text-lg transition shadow-md">
                Submit Review
            </button>
        </form>
    </div>
</div>

<!-- JAVASCRIPT UNTUK BUKA/TUTUP MODAL -->
<script>
    function openReviewModal() {
        const modal = document.getElementById('reviewModal');
        modal.classList.remove('hidden');
        modal.classList.add('flex');
    }

    function closeReviewModal() {
        const modal = document.getElementById('reviewModal');
        modal.classList.remove('flex');
        modal.classList.add('hidden');
    }

    // Menutup modal otomatis jika area di luar kotak putih diklik
    window.onclick = function(event) {
        const modal = document.getElementById('reviewModal');
        if (event.target == modal) {
            closeReviewModal();
        }
    }
</script>