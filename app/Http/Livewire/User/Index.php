<?php

namespace App\Http\Livewire\User;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;//evitar que se recargue al paginar

    protected $queryString = [
        'search' => ['except' => '' ],
        'perPage' => ['except' => '10' ]
    ];

    public $search = '';

    public $perPage = '5';

    public function render()
    {
        return view('livewire.user.index',[
            'users' => User::where( 'name', 'LIKE' , "%$this->search%")
            ->orwhere( 'email', 'LIKE' , "%$this->search%")
            ->paginate( $this->perPage)
        ]
        );
    }

    public function clear()
    {
        $this->search = '';
        $this->page = 1;
        $this->perPage = '10';
    }
}
