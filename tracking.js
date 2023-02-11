const tracking = [
    {
        "latitude": 13.7164808,
        "longitude": -89.2028634
    },
    {
        "latitude": 13.7164971,
        "longitude": -89.2018772
    },
    {
        "latitude": 13.7158536,
        "longitude": -89.2026
    },
    {
        "latitude": 13.715543,
        "longitude": -89.2034727,
        "id_tipo":"carro"
    },
    {
        "latitude": 13.7157191,
        "longitude": -89.2025385
    },
    {
        "latitude": 13.7159725,
        "longitude": -89.2016447
    },
    {
        "latitude": 13.7162124,
        "longitude": -89.2006343
    },
    {
        "latitude": 13.7152822,
        "longitude": -89.200664
    },
    {
        "latitude": 13.7143406,
        "longitude": -89.2007493
    }].sort((a,b) => a.longitude - b.longitude).map((data, index) => {
        const { latitude, longitude } = data
        return `INSERT INTO geometries(name, geom) VALUES('${index}', ST_GeomFromText('POINT(${longitude} ${latitude})', 4326));`
    });


INSERT INTO geometries(name, geom) VALUES('-89.2028634', ST_GeomFromText('POINT(-89.2028634 13.7164808)', 4326));
INSERT INTO geometries(name, geom) VALUES('-89.2018772', ST_GeomFromText('POINT(-89.2018772 13.7164971)', 4326));
INSERT INTO geometries(name, geom) VALUES('-89.2026', ST_GeomFromText('POINT(-89.2026 13.7158536)', 4326));
INSERT INTO geometries(name, geom) VALUES('-89.2034727', ST_GeomFromText('POINT(-89.2034727 13.715543)', 4326));
INSERT INTO geometries(name, geom) VALUES('-89.2025385', ST_GeomFromText('POINT(-89.2025385 13.7157191)', 4326));
INSERT INTO geometries(name, geom) VALUES('-89.2016447', ST_GeomFromText('POINT(-89.2016447 13.7159725)', 4326));
INSERT INTO geometries(name, geom) VALUES('-89.2006343', ST_GeomFromText('POINT(-89.2006343 13.7162124)', 4326));
INSERT INTO geometries(name, geom) VALUES('-89.200664', ST_GeomFromText('POINT(-89.200664 13.7152822)', 4326));
INSERT INTO geometries(name, geom) VALUES('-89.2007493', ST_GeomFromText('POINT(-89.2007493 13.7143406)', 4326));


INSERT INTO geometries(name, geom) VALUES('0', ST_GeomFromText('POINT(-89.2034727 13.715543)', 4326));
INSERT INTO geometries(name, geom) VALUES('1', ST_GeomFromText('POINT(-89.2028634 13.7164808)', 4326));
INSERT INTO geometries(name, geom) VALUES('2', ST_GeomFromText('POINT(-89.2026 13.7158536)', 4326));
INSERT INTO geometries(name, geom) VALUES('3', ST_GeomFromText('POINT(-89.2025385 13.7157191)', 4326));
INSERT INTO geometries(name, geom) VALUES('4', ST_GeomFromText('POINT(-89.2018772 13.7164971)', 4326));
INSERT INTO geometries(name, geom) VALUES('5', ST_GeomFromText('POINT(-89.2016447 13.7159725)', 4326));
INSERT INTO geometries(name, geom) VALUES('6', ST_GeomFromText('POINT(-89.2007493 13.7143406)', 4326));
INSERT INTO geometries(name, geom) VALUES('7', ST_GeomFromText('POINT(-89.200664 13.7152822)', 4326));
INSERT INTO geometries(name, geom) VALUES('8', ST_GeomFromText('POINT(-89.2006343 13.7162124)', 4326));


INSERT INTO geometries(name, geom) VALUES('0', SELECT ST_AsText( ST_Collect( ST_GeomFromText('POINT(-89.2034727 13.715543)',
ST_GeomFromText('POINT(-89.2028634 13.7164808)',
ST_GeomFromText('POINT(-89.2026 13.7158536)',
ST_GeomFromText('POINT(-89.2025385 13.7157191)',
ST_GeomFromText('POINT(-89.2018772 13.7164971)',
ST_GeomFromText('POINT(-89.2016447 13.7159725)',
ST_GeomFromText('POINT(-89.2007493 13.7143406)',
ST_GeomFromText('POINT(-89.200664 13.7152822)',
ST_GeomFromText('POINT(-89.2006343 13.7162124)')));