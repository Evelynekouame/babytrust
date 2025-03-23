import React from 'react';
import ReactDOM from 'react-dom';

function App() {
    return (
        <div className="p-8">
            <h1 className="text-3xl font-bold text-gray-800">React est prêt !</h1>
            <p className="mt-4 text-gray-600">Ajoutez vos composants ici.</p>
        </div>
    );
}

ReactDOM.render(<App />, document.getElementById('app'));