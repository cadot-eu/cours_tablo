import { Controller } from '@hotwired/stimulus';

export default class extends Controller {
    add() {
        const newline = this.element.cloneNode(true);
        newline.children[0].textContent = '';
        newline.children[1].textContent = '';
        newline.children[2].textContent = '';
        this.element.after(newline);
    }
    save() {
        fetch('/save', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ id: this.element.children[0].textContent, nom: this.element.children[1].textContent, prix: this.element.children[2].textContent }),
        })
            .then(() => location.reload());
    }
}

