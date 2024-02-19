## 1. Fatto scaffholding generale del progetto. Creato Databse, creato public controller.
## 2. Creato table per post e modificato user, fatto migrazione
## 3. creato One to Many su user e post

## 4. COME CREARE UNO STORE DI IMMAGINE NEL LIVEWIRE CREATE->
1. Andiamo in FileSystem.php
2. Modifichiamo all'array links il percorso della nuova public directory:
esempio:         public_path('immagini') => storage_path('app/public/immagini'),
3. Creare nella cartella "storage"->"public"-> La cartella 'immagini'
4. Php Artisan storage:link
5. nella funzione store'img' => $this->img->store('immagini'),

## 5. COME CREARE IL CARICAMENTO (UPLOAD) DELL'IMMAGINE
1. Quando uploadiamo un'immagine bisogna aspettare qualche secondo per cliccare crea post altrimenti ci da un errore.
Per evitare questo, sotto l'input di tipo file mettiamo un messaggio di attesa per l'utente creando un div con un action di livewire: <div wire:loading wire:target="img">Sto caricando...</div>

## 6. COME AGGIORNARE FEED IN TEMPO REALE
1. Nel createpost $this->dispatch('refreshPost'); catturiamo la funzione che scriviamo nel read post;
2. Nel readpost aggiungiamo la funzione public function refreshPost(){
        $posts = Post::all();
        return $posts;
    }
3. Modifichiamo la funzione render
public function render()
    {
        $posts = $this->refreshPost();
        return view('livewire.read-post' , compact('posts'));
    }
4. Dopo la funzione render aggiungimao una ascoltare di eventi #On['refreshPost] e importiamo On;
