<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - GreenTech Solutions</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>

<body>
    <div class="admin-layout">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="sidebar-header">
                <i class="fas fa-leaf"></i>
                <h2>GreenTech Admin</h2>
            </div>

            <div class="sidebar-footer">
                <a href="#" class="nav-item">
                    <i class="fas fa-home"></i>
                    <span>Retour au site</span>
                </a>
                <form>
                    <button type="submit" class="nav-item logout-btn">
                        <i class="fas fa-sign-out-alt"></i>
                        <span>Déconnexion</span>
                    </button>
                </form>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="main-content">
            <!-- Top Bar -->
            <header class="top-bar">
                <div class="search-box">
                    <i class="fas fa-search"></i>
                    <input type="text" placeholder="Rechercher...">
                </div>

                <div class="user-menu">
                    <div class="notifications">
                        <i class="fas fa-bell"></i>
                        <span class="badge">3</span>
                    </div>
                    <div class="user-profile">
                        <img src="https://ui-avatars.com/api/?name=Admin&background=356859&color=fff" alt="Admin">
                        <div class="user-info">
                            <span class="user-name">Administrateur</span>
                            <span class="user-role">Admin</span>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Dashboard Content -->
            <div class="dashboard-content">
                <div class="page-header">
                    <h1>Tableau de Bord</h1>
                    <p>Bienvenue dans votre espace d'administration</p>
                </div>

                <!-- Stats Cards -->
                <div class="stats-grid">
                    <div class="stat-card">
                        <div class="stat-icon" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
                            <i class="fas fa-box"></i>
                        </div>
                        <div class="stat-info">
                            <h3>156</h3>
                            <p>Produits Total</p>
                            <span class="stat-change positive">
                                <i class="fas fa-arrow-up"></i> 12% ce mois
                            </span>
                        </div>
                    </div>

                    <div class="stat-card">
                        <div class="stat-icon" style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                        <div class="stat-info">
                            <h3>89</h3>
                            <p>Commandes</p>
                            <span class="stat-change positive">
                                <i class="fas fa-arrow-up"></i> 8% ce mois
                            </span>
                        </div>
                    </div>

                    <div class="stat-card">
                        <div class="stat-icon" style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);">
                            <i class="fas fa-euro-sign"></i>
                        </div>
                        <div class="stat-info">
                            <h3>4,250€</h3>
                            <p>Revenus</p>
                            <span class="stat-change positive">
                                <i class="fas fa-arrow-up"></i> 15% ce mois
                            </span>
                        </div>
                    </div>

                    <div class="stat-card">
                        <div class="stat-icon" style="background: linear-gradient(135deg, #fa709a 0%, #fee140 100%);">
                            <i class="fas fa-exclamation-triangle"></i>
                        </div>
                        <div class="stat-info">
                            <h3>12</h3>
                            <p>Stock Faible</p>
                            <span class="stat-change negative">
                                <i class="fas fa-arrow-down"></i> Attention
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Recent Products & Quick Actions -->
                <div class="content-grid">
                    <!-- Recent Products -->
                    <div class="panel">
                        <div class="panel-header">
                            <h2><i class="fas fa-box"></i> Produits Récents</h2>
                            <a href="#" class="btn-view-all">Voir tout</a>
                        </div>
                        <div class="table-container">
                            <table class="data-table">
                                <thead>
                                    <tr>
                                        <th>Produit</th>
                                        <th>Catégorie</th>
                                        <th>Prix</th>
                                        <th>Stock</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="product-cell">
                                                <img src="https://via.placeholder.com/50" alt="Produit">
                                                <span>Produit Démo</span>
                                            </div>
                                        </td>
                                        <td><span class="badge-category">Électronique</span></td>
                                        <td class="price">199.99€</td>
                                        <td><span class="stock-badge high">25</span></td>
                                        <td>
                                            <div class="action-buttons">
                                                <a href="#" class="btn-action edit"><i class="fas fa-edit"></i></a>
                                                <button class="btn-action delete"><i class="fas fa-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="5" class="no-data">Aucun produit trouvé</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Quick Actions -->
                    <div class="panel">
                        <div class="panel-header">
                            <h2><i class="fas fa-bolt"></i> Actions Rapides</h2>
                        </div>
                        <div class="quick-actions">
                            <a href="#" class="action-card">
                                <div class="action-icon" style="background: var(--accent);">
                                    <i class="fas fa-plus"></i>
                                </div>
                                <h3>Ajouter un Produit</h3>
                                <p>Créer un nouveau produit</p>
                            </a>

                            <a href="#" class="action-card">
                                <div class="action-icon" style="background: var(--primary-light);">
                                    <i class="fas fa-tag"></i>
                                </div>
                                <h3>Nouvelle Catégorie</h3>
                                <p>Ajouter une catégorie</p>
                            </a>

                            <a href="#" class="action-card">
                                <div class="action-icon" style="background: #667eea;">
                                    <i class="fas fa-file-export"></i>
                                </div>
                                <h3>Exporter Données</h3>
                                <p>Télécharger un rapport</p>
                            </a>

                            <a href="#" class="action-card">
                                <div class="action-icon" style="background: #f093fb;">
                                    <i class="fas fa-chart-pie"></i>
                                </div>
                                <h3>Voir Statistiques</h3>
                                <p>Analyses détaillées</p>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Stock Alerts -->
                <div class="panel">
                    <div class="panel-header">
                        <h2><i class="fas fa-exclamation-circle"></i> Alertes Stock</h2>
                    </div>
                    <div class="alert-list">
                        <div class="alert-item success">
                            <div class="alert-icon">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div class="alert-content">
                                <h4>Tout va bien !</h4>
                                <p>Aucune alerte de stock pour le moment</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script>
        const sidebar = document.querySelector('.sidebar');
        const toggleBtn = document.createElement('button');
        toggleBtn.className = 'sidebar-toggle';
        toggleBtn.innerHTML = '<i class="fas fa-bars"></i>';
        document.querySelector('.top-bar').prepend(toggleBtn);

        toggleBtn.addEventListener('click', () => {
            sidebar.classList.toggle('active');
        });

        document.querySelectorAll('.nav-item').forEach(item => {
            item.addEventListener('click', function() {
                document.querySelectorAll('.nav-item').forEach(i => i.classList.remove('active'));
                this.classList.add('active');
            });
        });

        document.querySelectorAll('.stat-card').forEach((card, index) => {
            card.style.animationDelay = `${index * 0.1}s`;
        });
    </script>
</body>

</html>