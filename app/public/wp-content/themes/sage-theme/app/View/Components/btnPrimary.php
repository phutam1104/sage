<?php
namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class btnPrimary extends Component
{
    public $type; // Default type is button
    public string $type_class; // Property for the type class

    public array $types = [
        'primary' => 'bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500',
        'secondary' => 'bg-gray-500 text-white py-2 px-4 rounded hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500',
        'success' => 'bg-green-500 text-white py-2 px-4 rounded hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500',
        'danger' => 'bg-red-500 text-white py-2 px-4 rounded hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500',
        'warning' => 'bg-yellow-500 text-white py-2 px-4 rounded hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-yellow-500',
        'info' => 'bg-blue-300 text-white py-2 px-4 rounded hover:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-300',
        'light' => 'bg-gray-200 text-gray-800 py-2 px-4 rounded hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200',
        'dark' => 'bg-gray-800 text-white py-2 px-4 rounded hover:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-gray-800',
        'link' => 'bg-transparent text-blue-500 py-2 px-4 rounded hover:bg-blue-100 focus:outline-none focus:ring-2 focus:ring-blue-500',
    ];

    public $href; // Property for the href link

    /**
     * Create a new component instance.
     */
    public function __construct($href = '#', $type = 'primary')
    {
        $this->href = $href; // Set the default value to '#' if no href is provided
        $this->type = $type; // Set the type
        $this->type_class = $this->types[$type] ?? $this->types['primary']; // Set the type_class based on the provided type
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.btn-primary', ['href' => $this->href, 'type_class' => $this->type_class]);
    }
}

