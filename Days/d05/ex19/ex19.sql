SELECT ABS(DATEDIFF(MAX(date), MIN(date))) AS 'uptime'
FROM historique_membre;
