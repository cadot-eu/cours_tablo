import { Controller } from '@hotwired/stimulus';
export default class extends Controller {
    connect() {
        const addLineButton = document.getElementById('addline');
        if (addLineButton) {
            addLineButton.addEventListener('click', () => {
                const newRow = document.createElement('tr');
                newRow.innerHTML = `
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				`;
                document.querySelector('tbody').prepend(newRow);
            });
        }
    }
}
