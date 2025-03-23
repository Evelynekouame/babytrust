import React from 'react';

const HomePage = () => {
    return (
        <div className="bg-gray-50 min-h-screen">
            {/* En-tête */}
            <header className="flex justify-between items-center p-4 bg-white shadow-md">
                <div className="text-xl font-bold text-blue-600">Babysits</div>
                <nav className="flex space-x-4">
                    <a href="#" className="text-gray-700 hover:text-blue-600">Baby-sitters</a>
                    <a href="#" className="text-gray-700 hover:text-blue-600">Jobs de garde d'enfants</a>
                    <a href="#" className="text-gray-700 hover:text-blue-600">Comment ça marche</a>
                    <a href="#" className="text-gray-700 hover:text-blue-600">Tarifs</a>
                </nav>
                <div className="flex space-x-2">
                    <button className="px-4 py-2 bg-gray-200 rounded">Connexion</button>
                    <button className="px-4 py-2 bg-blue-600 text-white rounded">S'inscrire</button>
                </div>
            </header>

            {/* Section principale */}
            <main className="text-center py-12 px-4">
                <h1 className="text-4xl font-bold text-gray-800 mb-6">
                    La plateforme de garde d'enfants approuvée par les babysitters
                </h1>
                <div className="flex justify-center space-x-4 mb-6">
                    <button className="px-4 py-2 bg-blue-600 text-white rounded">
                        Baby-sitter recherché(e)
                    </button>
                    <button className="px-4 py-2 bg-gray-200 text-gray-700 rounded">
                        Jobs de garde d'enfants
                    </button>
                </div>
                <form className="flex justify-center space-x-4">
                    <input
                        type="text"
                        placeholder="Trouvez votre babysitter"
                        className="px-4 py-2 border border-gray-300 rounded"
                    />
                    <input
                        type="text"
                        placeholder="Ville ou code postal"
                        className="px-4 py-2 border border-gray-300 rounded"
                    />
                    <button className="px-4 py-2 bg-blue-600 text-white rounded">
                        Rechercher
                    </button>
                </form>
                <button className="mt-6 px-6 py-3 bg-green-500 text-white rounded">
                    Inscription gratuite
                </button>
            </main>

            {/* Footer */}
            <footer className="bg-white shadow-md py-6 px-4">
                <div className="flex justify-center space-x-4 mb-4">
                    <img src="/images/20-minutes-logo.png" alt="20 Minutes" className="w-16" />
                    <img src="/images/sud-ouest-logo.png" alt="Sud Ouest" className="w-16" />
                </div>
                <div className="flex justify-center items-center space-x-2">
                    <span className="text-yellow-500">★★★★★</span>
                    <span className="text-gray-700">4,7 / 5</span>
                </div>
            </footer>
        </div>
    );
};

export default HomePage;