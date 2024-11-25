<div class="p-6 bg-white rounded-lg shadow hover:shadow-lg transition-shadow">
    <h3 class="font-semibold text-lg text-gray-800 text-center mb-4">{{ $title }}</h3>
    <div class="flex items-center justify-between mb-3">
        <div class="flex items-center">
            <i class="fas fa-briefcase text-highlight-yellow mr-2"></i>
            <span class="text-sm text-gray-600">Jobs Available:</span>
        </div>
        <span class="font-bold text-gray-800">{{ $jobs }}</span>
    </div>
    <div class="flex items-center justify-between">
        <div class="flex items-center">
            <i class="fas fa-dollar-sign text-highlight-yellow mr-2"></i>
            <span class="text-sm text-gray-600">Avg. Salary:</span>
        </div>
        <span class="font-bold text-gray-800">{{ $salary }}</span>
    </div>
</div>
