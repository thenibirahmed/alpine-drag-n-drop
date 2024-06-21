import './bootstrap';

import sort from '@alpinejs/sort'
import { Livewire, Alpine } from '../../vendor/livewire/livewire/dist/livewire.esm';

Alpine.plugin(sort)

Livewire.start()
